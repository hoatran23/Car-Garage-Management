<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Cart;
use App\Models\Car;
use App\Models\StoreSpareParts;
use App\Models\Wage;
use App\Models\NoteRepair;
use App\Models\DetailSpareParts;
use App\Models\Customer;
use Session;

session_start();
class NoteRepairController extends Controller
{
    //
    public function getNoteRepair() {
    	date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = getdate();
    	$data["date"] = $date['year']."-".$date['mon']."-".$date['mday'];
    	$data["list_plate_fixing"] = DB::table("gara_xe")->where('gara_xe.car_status', '!=', 2)->where('gara_xe.car_status', '!=', 0)->get();
        $data["list_plate_complete"] = DB::table("gara_xe")->where('gara_xe.car_status', '==', 0)->get();
    	$data["list_spare_parts"] = DB::table("gara_kho")->get();
    	$data["list_wage"] = DB::table("gara_tiencong")->get();
    	$data["list_note"] = DB::table("gara_phieusuachua")->get();
    	// dd($data["list_note"]);
    	return view("note_repair", $data);
    }

    public function postNoteRepair(Request $request) {
    	$result = $request->all();
    	// dd($result);
    	if(session()->has('add_Cart')){
    		$value_session = array_values(Session::get('add_Cart'));
            // dd($value_session);
    		$bien_so = $value_session[0]['id_plate'];
    		$ma_kh = DB::table('gara_xe')->where('gara_xe.car_license_plate', $bien_so)->pluck('car_cus_id')[0];
    		$tong_tien_cong = 0;
    		$tong_tien_phu_tung = 0;
    		$tong_tien_sua_chua = 0;
    		foreach ($value_session as $key => $value) {
    			$tong_tien_cong = $tong_tien_cong + $value['tien_cong'];
    			$tong_tien_phu_tung = $tong_tien_phu_tung + ((int)$value['spare_part'] * (int)$value['amount']);
    			$tong_tien_sua_chua = $tong_tien_sua_chua + $value['thanh_tien'];
    		}
    		$new_note_repair = new NoteRepair;
    		$new_note_repair->note_repair_license_plate	= $value_session[0]['id_plate'];
    		$new_note_repair->note_repair_cus_id = $ma_kh;
    		$new_note_repair->note_repair_wage = $tong_tien_cong;
    		$new_note_repair->note_repair_accessary = $tong_tien_phu_tung;
    		$new_note_repair->note_repair_total = $tong_tien_sua_chua;
    		$new_note_repair->save();

    		$id_note_repair = DB::getPdo()->lastInsertId();

    		foreach ($value_session as $key => $value) {
    			$new_detail = new DetailSpareParts;
    			$new_detail->detail_note_repair_id = $id_note_repair;
    			$new_detail->detail_wage_id = $value['wage_id'];
    			$new_detail->detail_store_id = $value['id_store'];
    			$new_detail->detail_amount_spare = $value['amount'];

    			$update_amount_store = StoreSpareParts::find($value["id_store"]);
    			$update_amount_store['store_quantity_avail'] = $update_amount_store['store_quantity_avail'] - $value['amount'];

    			$update_amount_store->save();
    			$new_detail->save();
    		}
    		session()->flush();

            $update_status_car = Car::where('car_license_plate', $new_note_repair->note_repair_license_plate)->first();
            $update_status_car->car_status = 2;
            $update_status_car->save();

            $update_debt = Customer::where('cus_id', $ma_kh)->first();
            $update_debt->cus_debt = $tong_tien_sua_chua;
            $update_debt->save();
            return true;
    	}
    	else {
            return false;
    	}
    }

    public function postaddCart(Request $request) {
    	$data = $request->all();
        // return $data;
        $ten_vat_tu = DB::table("gara_kho")->where("gara_kho.store_id", $data["id_store"])->pluck("store_spare_name");
    	$ten_sua_chua = DB::table("gara_tiencong")->where("gara_tiencong.wage_id", $data["wage_id"])->pluck("wage_name");
    	$tien_cong = DB::table("gara_tiencong")->where("gara_tiencong.wage_id", $data["wage_id"])->pluck("wage_cost");
        
    	$session_id = substr(md5(microtime()), rand(0,26), 5);
    	$cart = Session::get('add_Cart');

        $cart[] = array(
            'session_id' => $session_id,
            'id_store' => $data['id_store'],
            'amount' => $data['amount'],
            'wage' => $data['wage'],
            'spare_part' => $data['spare_part'],
            'wage_id' => $data['wage_id'],
            'id_plate' => $data['id_plate'],
            'ten_vat_tu' => $ten_vat_tu[0],
            'ten_sua_chua' => $ten_sua_chua[0],
            'tien_cong' => $tien_cong[0],
            'thanh_tien' => $data['amount'] * $data['spare_part'] + $tien_cong[0]
        );
       
        Session::put('add_Cart', $cart);
        Session::save();

        $output = '<tr> <th>STT</th> <th>Biển số</th> <th>Tên phụ tùng</th> <th>Số lượng</th> <th>Đơn giá</th> <th>Loại tiền công</th> <th>Chi phí sửa</th> <th>Thành tiền</th> </tr>';
        foreach (Session::get('add_Cart') as $key => $value) {
            $output .= '<tr> <td>'.($key + 1).'</td> <td>'.$value['id_plate'].'</td> <td>'.$value['ten_vat_tu'].'</td> <td>'.$value['amount'].'</td> <td>'.$value['spare_part'].'</td> <td>'.$value['ten_sua_chua'].'</td> <td>'.$value['tien_cong'].'</td> <td>'.$value['thanh_tien'].'</td> </tr>';
        }

        echo $output;
    }

    public function postTotal(Request $request) {
    	$data = $request->all();
    	// session()->flush();
    	$vat_tu_co_san = StoreSpareParts::find($data["id_store"]);
    	if ($vat_tu_co_san->store_quantity_avail >=  $data['amount'] ) {
    		return $data["spare_part"] * $data["amount"] + $data["wage"];
    	} else {
    		return "Thất bại! Số lượng vật tư trong kho không đủ, vui lòng nhập thêm.";
    	}
     }

     public function removeNoteRepair($session_id) {
     	$cart = Session::get('add_Cart');
     	if ($cart == true) {
     		# code...
     		foreach ($cart as $key => $value) {
     			# code...
     			if ($value['session_id'] == $session_id) {
     				# code...
     				unset($cart[$key]);
     			}
     		} 
     		Session::put('add_Cart', $cart);
     		return back();
     	}
     }

    public function deleteNoteRepair() {
        session()->flush();
	    return back();
    }
}
