<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\BrandCar;
use App\Models\Car;
use App\Models\Customer;

class CarReceiptController extends Controller
{
    //
    public function getInfoPeopleCar() {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = getdate();
        $data['current_date'] = $date['mday']."-".$date['mon']."-".$date['year'];
        $now = $date['year']."-".$date['mon']."-".$date['mday'];
    	$data['list_brand_car'] = DB::table('gara_hieuxe')->get();
        $regu = DB::table('gara_quydinh')->where('gara_quydinh.regu_id', 'QD2')->pluck('regu_value');
        $amount_regu = $regu[0];
        $data['car_of_day'] = count(DB::table('gara_xe')->where('gara_xe.car_date_receipt', $now)->get());
        // dd($data['car_of_day']);
        $percent = round(($data['car_of_day'] * 100 / $regu[0]), 1);
        // dd( $percent);
     	return view("car_receipt", $data)->with(compact('percent', 'amount_regu'));
    }

    public function postPeopleCar(Request $request) {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = getdate();
        $now = $date['year']."-".$date['mon']."-".$date['mday'];
        $regu = DB::table('gara_quydinh')->where('gara_quydinh.regu_id', 'QD2')->pluck('regu_value');
        // dd($regu);
        $data['car_of_day'] = count(DB::table('gara_xe')->where('gara_xe.car_date_receipt', $now)->get());
        $plate_car = DB::table('gara_xe')->where('gara_xe.car_license_plate', $request->car_license_plate)->pluck('car_license_plate');
        // dd($plate_car->isEmpty());
        if ($plate_car->isEmpty() == true) {
            # code...
        	if ($data['car_of_day'] < $regu[0]) {
                $date = getdate();

                $new_cus = new Customer;
                $new_cus->cus_name = $request->cus_name;
                $new_cus->cus_phone = $request->cus_phone;
                $new_cus->cus_address = $request->cus_address;
                $new_cus->cus_debt = 0;
                $new_cus->cus_mail = $request->email;
                $new_cus->save();
                $id_cus = DB::getPdo()->lastInsertId();

                $new_car = new Car;
                $new_car->car_license_plate = $request->car_license_plate;
                $new_car->car_brand = $request->car_brand;
                $new_car->car_cus_id = $id_cus;
                $new_car->car_date_receipt = $date['year']."-".$date['mon']."-".$date['mday'];
                $new_car->car_status = 1;
                $new_car->save();
                return back()->with('success', 'Thành công. Thông tin khách hàng và xe đã được lưu vào hệ thống!!!');
            } else {
                return back()->with('status', 'Không thành công do số lượng xe trong ngày đã đạt tối đa!!!');
            }
        } else {
            return back()->with('status', 'Không thành công do xe đã được tiếp nhận!!!');
        }
        // dd( $plate_car);
    }

    public function getInfoDetailPeopleCar() {
        $data['list_car_cus'] = DB::table('gara_hieuxe')->join('gara_xe', 'gara_xe.car_brand', '=', 'gara_hieuxe.brand_car_id')
                                                ->join('gara_khachhang', 'gara_khachhang.cus_id', '=', 'gara_xe.car_cus_id')
                                                ->paginate(5);
        // dd($data['list_car_cus']);
        return view('car_receipt_detail', $data);
    }
}
