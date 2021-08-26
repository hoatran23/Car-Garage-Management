<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Mail;
use App\Models\BrandCar;
use App\Models\Bill;
use App\Models\Car;
use App\Models\Customer;
use App\Models\NoteRepair;


class BillController extends Controller
{
    //
    public function getBill() {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
    	$date = getdate();
    	$data['current_date'] = $date['mday']."-".$date['mon']."-".$date['year'];
    	$data['list_car'] = DB::table('gara_xe')->where('gara_xe.car_status', '!=', 0)->get();
    	$data['cus_info'] = DB::table('gara_khachhang')->get();
    	// dd($data['cus_info']);
    	return view("bill", $data);
    }

    public function postBill(Request $request) {
        // $data['info'] = $request->all();
        // dd($data);
        $plate = $request->biensoxe;
        $id_cus = Car::find($plate)->where('car_license_plate', $plate)->pluck('car_cus_id');
        $email = DB::table('gara_khachhang')->where('cus_id', $id_cus)->pluck('cus_mail')[0];
        
        $data['info'] = DB::table('gara_khachhang')->join('gara_xe', 'gara_khachhang.cus_id', 'gara_xe.car_cus_id')->where('gara_xe.car_license_plate', $plate)->get()[0];
        $data['info_car'] = DB::table('gara_phieusuachua')->join('gara_chitietphieusuachua', 'note_repair_id', 'detail_note_repair_id')->where('gara_phieusuachua.note_repair_license_plate', $plate)->join('gara_kho', 'store_id', 'detail_store_id')->join('gara_tiencong', 'wage_id', 'detail_wage_id')->get();

        $data['total'] = DB::table('gara_phieusuachua')->where('note_repair_license_plate', $plate)->select('note_repair_total', 'note_repair_wage', 'note_repair_accessary')->get()[0];

        // $data['debt'] = 0;
        // $data['paid'] = $data['total']->note_repair_total;

        // dd($data['info_car']);
        // dd($data['info']->cus_name);
        // dd($data['total']);
        // dd($data['debt']);
       

        $new_bill = new Bill;
        $date = getdate();
        $car_license = $request->biensoxe;
        if ($car_license) {
            $id_cus = Car::find($car_license)->where('car_license_plate', $car_license)->pluck('car_cus_id');
            // dd($id_cus[0]);
            $new_bill->bill_cus_id = $id_cus[0];
        }
        $tongcong = DB::table('gara_phieusuachua')->where('gara_phieusuachua.note_repair_license_plate', $car_license)->pluck('note_repair_total')[0];

        $debt = $request->tongtien - $request->sotienthu;
       
        if ($debt == 0) {
            $new_bill->bill_money_profit = $request->sotienthu * 30 / 100;
            $new_bill->bill_money_receive = $request->sotienthu;
            $new_bill->bill_date = $date['year']."-".$date['mon']."-".$date['mday'];
            $new_bill->save();

            $update_status_car = Car::where('car_license_plate', $car_license)->first();
            $update_status_car->car_status = 0;
            $update_status_car->save();

            $update_debt = Customer::where('cus_id', $id_cus)->first();
            $update_debt->cus_debt = $request->tongtien - $request->sotienthu; 
            $update_debt->save();

            // return back()->with('succsess', 'Thành công. Phương tiện đã được sửa chữa và hoàn tất thanh toán!!!');
            $data['debt'] = 0;
            $data['paid'] = $data['total']->note_repair_total;
            $data['status'] =  $data['debt'];

            Mail::send('mail',$data,function($message)use($email){
                // dd($email);
                $message->from('trantuyhoa2307@gmai.com','Hoa Tran');
                $message->to($email, $email);
                $message->cc('bubutran23@gmai.com','Hoa Tran');
                $message->subject('Xác Nhận Hóa Đơn Thanh Toán');
            });
            return redirect('admin/complete');
        } else if ($debt > 0) {
            $new_bill->bill_money_profit = $request->sotienthu * 30 / 100;
            $new_bill->bill_money_receive = $request->sotienthu;
            $new_bill->bill_date = $date['year']."-".$date['mon']."-".$date['mday'];
            $new_bill->save();

            $update_debt = Customer::where('cus_id', $id_cus)->first();
            $update_debt->cus_debt = $request->tongtien - $request->sotienthu; 
            $update_debt->save();

            // dd($update_debt);
            // return back()->with('succsess', 'Thành công. Phương tiện đã được sửa chữa, thanh toán một phần và còn nợ '.$update_debt->cus_debt.' nghìn đồng');

            $data['debt'] = $update_debt->cus_debt;
            $data['paid'] = $data['total']->note_repair_total - $data['debt'];
            $data['status'] =  $data['debt'];

            Mail::send('mail',$data,function($message)use($email){
                // dd($email);
                $message->from('trantuyhoa2307@gmai.com','Hoa Tran');
                $message->to($email, $email);
                $message->cc('bubutran23@gmai.com','Hoa Tran');
                $message->subject('Xác Nhận Hóa Đơn Thanh Toán');
            });

            return back()->with('succsess', 'Thành công. Phương tiện đã được sửa chữa, thanh toán một phần và còn nợ '.$update_debt->cus_debt.' nghìn đồng');
        } else {
            return back()->with('status', 'Không thành công do số tiền thu vượt quá số tiền nợ!!!');
        }

        // dd($update_debt->cus_debt);
    }

    public function postBillPlate(Request $request) {
    	$data = $request->all();
        $status = DB::table('gara_xe')->where('gara_xe.car_license_plate', $data["value"])->pluck('car_status');
        if ($status[0] == 1 || $status[0] == 2) {
            $get_info = DB::table('gara_xe')->join('gara_phieusuachua', 'gara_xe.car_license_plate', 'gara_phieusuachua.note_repair_license_plate')->join('gara_khachhang', 'gara_khachhang.cus_id', 'gara_xe.car_cus_id')->where("gara_xe.car_license_plate", $data["value"])->get();
            // return $get_info;
        	return json_encode($get_info);
        } else {
            return false;
        }
    }

    public function getComplete() {
        return view('complete');
    }
}
