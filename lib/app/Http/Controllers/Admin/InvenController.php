<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\StoreSpareParts;
use App\Models\Inventory;
use App\Models\ImportSpareParts;
use Carbon\Carbon;

class InvenController extends Controller
{
    //
    public function getInventory() {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
		$date = getdate();
		$data['current_date'] = $date['year']."-".$date['mon']."-".$date['mday'];

        // dd($date);
    	$data['list_spare'] = DB::table('gara_kho')->get();
    	return view('inventory', $data);
    }

    public function postInventory(Request $request) {
    	$date = getdate();
    	$data = $request->all();
        // dd($data);
    	$length = count($data['id_store']);
    	for ($i = 0; $i < $length; $i++) { 
    		$new_inven = new Inventory;
    		$new_inven->inven_spare_id = $data['id_store'][$i];
	    	$new_inven->inven_spare_name = $data['spare_name'][$i];
            $new_inven->inven_date = $data['month'].'-15';
            $new_inven->inven_date_real = $date['year']."-".$date['mon']."-".$date['mday'];
	    	$new_inven->inven_first = $data['ton_dau'][$i];
	    	$new_inven->inven_last = $data['ton_cuoi'][$i];
	    	$new_inven->inven_extra = $data['phat_sinh'][$i];
	    	$new_inven->save();
    	}
    	return back()->with('success', 'Báo cáo tồn kho đã đươc lưu thành công!!!');
    }

    public function postTotalInventory(Request $request) {
        $now = Carbon::now();
        $now->month;

        $data = $request->all();
        // return $data;
        $date = explode("-",  $data['get_month']); //Hàm tách tháng năm

        // $day = $date[2];
        $month = $date[1] - 1; // tháng trước tháng báo cáo
        $year = $date[0];

        // return $current_month = $date[1];
        if ($date[1] <= $now->month) {
            # code...
            $check_exist = Inventory::whereYear('inven_date', '=', $date[0])->whereMonth('inven_date', '=', $date[1])->get();
            if ($check_exist->isEmpty() == true) {
                $result = Inventory::whereYear('inven_date', '=', $year)->whereMonth('inven_date', '=', $month) ->get();
                $amount_store = DB::table('gara_kho')->get();
                $amount_import = ImportSpareParts::whereYear('import_date', '=', $year)->whereMonth('import_date', '=', ($month + 1))->get();
                $arr = [$result, $amount_store, $amount_import];
                return $arr;
            } else {            
                return 0;
            }
        } else {
            return 1;
        }

    }


    // Tra cuu bao cao
    public function getDetailInventory() {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = getdate();
        $data['current_date'] = $date['year']."-".$date['mon']."-".$date['mday'];

        // dd($date);
        $data['list_spare'] = DB::table('gara_kho')->get();
        return view('inven_detail', $data);
    }

    public function postDetailInventory(Request $request) {
        $data = $request->all();
        $date = explode("-",  $data['get_date']);

        // $day = $date[2];
        $month = $date[1];
        $year = $date[0];
        // dd($month);
        $result = Inventory::whereYear('inven_date', '=', $year) ->whereMonth('inven_date', '=', $month) ->get();

        $output = '<table class="text-center"> <thead> <tr> <th>STT</th> <th>Mã phụ tùng</th> <th>Tên phụ tùng</th> <th>Tồn đầu</th> <th>Phát sinh</th> <th>Tồn cuối</th> </tr> </thead> <tbody>';
        foreach ($result as $key => $value) {
            $output .= '<tr> <td>'.$key.'</td> <td>'.$value->inven_spare_id.'</td> <td>'.$value->inven_spare_name.'</td> <td>'.$value->inven_first.'</td> <td>'.$value->inven_extra.'</td> <td>'.$value->inven_last.'</td> </tr>';
        }
        $output .= '</tbody></table';
        echo $output;
    }
}
