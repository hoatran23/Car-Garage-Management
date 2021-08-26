<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BrandCar;
use App\Models\Regulations;
use DB;

class BrandCarController extends Controller
{
    //
    public function getBrandCar() {
    	$data['brand_list'] = DB::table('gara_hieuxe')->get();

        $amout_brand_car = count(BrandCar::get());
        $amount_regu = DB::table('gara_quydinh')->where('gara_quydinh.regu_id', 'QD1')->pluck('regu_value')[0];
        $percent = round(($amout_brand_car * 100 / $amount_regu), 1);
    	return view("brand_car", $data)->with(compact('percent', 'amout_brand_car', 'amount_regu'));
    }

    public function postBrandCar(Request $request) {
        $amout_brand_car = count(BrandCar::get());
        $amount_regu = DB::table('gara_quydinh')->where('gara_quydinh.regu_id', 'QD1')->pluck('regu_value')[0];

        if ($amout_brand_car < $amount_regu) {
        	$brand_car = new BrandCar;
        	$brand_car->brand_name = $request->name;
        	$brand_car->save();
        	return back()->with('success', 'Đã thêm hiệu xe mới thành công!!!');
        } else {
            return back()->with('status', 'Không thành công do số lượng hiệu xe đã đạt tối đa!!!');
        }
       
    }

    public function deleteBrandCar($id) {
    	BrandCar::destroy($id);
    	return back()->with('success', 'Xóa hiệu xe thành công!!!');
    }
}
