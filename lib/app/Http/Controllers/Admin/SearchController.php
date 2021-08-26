<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Car;

class SearchController extends Controller
{
    //
    public function getSearch() {
    	return view('search');
    }

    public function postValueSearch(Request $request) {
    	$data = $request->all();
    	$convert = str_replace(' ', '%', $data['keyword']);
    	if ($data['type_search'] == 'biensoxe') {
	    	$result = DB::table('gara_xe')->join('gara_hieuxe', 'gara_hieuxe.brand_car_id', 'gara_xe.car_brand')->join('gara_khachhang', 'gara_khachhang.cus_id', 'gara_xe.car_cus_id')->where('car_license_plate','like','%'.$convert.'%')->get();

	    	$output = '<table class="text-center"> <thead> <tr> <th>Biển số</th> <th>Hiệu xe</th> <th>Tên khách hàng</th> <th>Số điện thoại</th> <th>Địa chỉ</th> <th>Trạng thái</th> </tr> </thead> <tbody>';

	    	foreach ($result as $key => $value) {
                $status = '';
                if ($value->car_status == 0) {
                    $status = 'Đã hoàn thành';
                } else {
                    $status = 'Đang sữa chữa';
                }

    			$output .= '<tr> <td>'.$value->car_license_plate.'</td> <td>'.$value->brand_name.'</td> <td>'.$value->cus_name.'</td> <td>'.$value->cus_phone.'</td> <td>'.$value->cus_address.'</td> <td>'.$status.'</td> </tr>';
    		}
    		$output .= '</tbody></table>';
    	} else if ($data['type_search'] == 'hieuxe') {
    		$result = DB::table('gara_xe')->join('gara_hieuxe', 'gara_hieuxe.brand_car_id', 'gara_xe.car_brand')->join('gara_khachhang', 'gara_khachhang.cus_id', 'gara_xe.car_cus_id')->where('brand_name','like','%'.$convert.'%')->get();

	    	$output = '<table class="text-center"> <thead> <tr> <th>Biển số</th> <th>Hiệu xe</th> <th>Tên khách hàng</th> <th>Số điện thoại</th> <th>Địa chỉ</th> <th>Trạng thái</th> </tr> </thead> <tbody>';

	    	foreach ($result as $key => $value) {
                $status = '';
                if ($value->car_status == 0) {
                    $status = 'Đã hoàn thành';
                } else {
                    $status = 'Đang sữa chữa';
                }

    			$output .= '<tr> <td>'.$value->car_license_plate.'</td> <td>'.$value->brand_name.'</td> <td>'.$value->cus_name.'</td> <td>'.$value->cus_phone.'</td> <td>'.$value->cus_address.'</td> <td>'.$status.'</td> </tr>';
    		}
    		$output .= '</tbody></table>'; 
    	} else if ($data['type_search'] == 'tenkhachhang') {
    		$result = DB::table('gara_xe')->join('gara_hieuxe', 'gara_hieuxe.brand_car_id', 'gara_xe.car_brand')->join('gara_khachhang', 'gara_khachhang.cus_id', 'gara_xe.car_cus_id')->where('cus_name','like','%'.$convert.'%')->get();

	    	$output = '<table class="text-center"> <thead> <tr> <th>Biển số</th> <th>Hiệu xe</th> <th>Tên khách hàng</th> <th>Số điện thoại</th> <th>Địa chỉ</th> <th>Trạng thái</th> </tr> </thead> <tbody>';

	    	foreach ($result as $key => $value) {
                $status = '';
                if ($value->car_status == 0) {
                    $status = 'Đã hoàn thành';
                } else {
                    $status = 'Đang sữa chữa';
                }

    			$output .= '<tr> <td>'.$value->car_license_plate.'</td> <td>'.$value->brand_name.'</td> <td>'.$value->cus_name.'</td> <td>'.$value->cus_phone.'</td> <td>'.$value->cus_address.'</td> <td>'.$status.'</td> </tr>';
    		}
    		$output .= '</tbody></table>';  
    	} else if ($data['type_search'] == 'sdt') {
    		$result = DB::table('gara_xe')->join('gara_hieuxe', 'gara_hieuxe.brand_car_id', 'gara_xe.car_brand')->join('gara_khachhang', 'gara_khachhang.cus_id', 'gara_xe.car_cus_id')->where('cus_phone','like','%'.$convert.'%')->get();

	    	$output = '<table class="text-center"> <thead> <tr> <th>Biển số</th> <th>Hiệu xe</th> <th>Tên khách hàng</th> <th>Số điện thoại</th> <th>Địa chỉ</th> <th>Trạng thái</th> </tr> </thead> <tbody>';

	    	foreach ($result as $key => $value) {
                $status = '';
                if ($value->car_status == 0) {
                    $status = 'Đã hoàn thành';
                } else {
                    $status = 'Đang sữa chữa';
                }

    			$output .= '<tr> <td>'.$value->car_license_plate.'</td> <td>'.$value->brand_name.'</td> <td>'.$value->cus_name.'</td> <td>'.$value->cus_phone.'</td> <td>'.$value->cus_address.'</td> <td>'.$status.'</td> </tr>';
    		}
    		$output .= '</tbody></table>';  
    	}

    	echo $output;
    	// return $convert;
    }

    public function postAutoSearch(Request $request) {
    	$data = $request->all();
    	// return $data;
    	// return $data['query'];
    	if ($data['query']) {
    		$convert = str_replace(' ', '%', $data['query']);
    		// return $convert;
    		if ($data['type_search'] == 'biensoxe') {
    			# code...
	    		$result = DB::table('gara_xe')->where('car_license_plate','like','%'.$convert.'%')->get();

	    		$output = '<ul class="dropdown-menu clos" style="display: block; position: relative;">';
	    		foreach ($result as $key => $value) {
	    			$output .= '<li class="li_search"><a href="#">'. $value->car_license_plate.'</a></li>';
	    		}
	    		$output .= '</ul>';
	    		echo $output; 
    		} else if ($data['type_search'] == 'hieuxe') {
    			$result = DB::table('gara_hieuxe')->where('brand_name','like','%'.$convert.'%')->get();

	    		$output = '<ul class="dropdown-menu clos" style="display: block; position: relative;">';
	    		foreach ($result as $key => $value) {
	    			// $output .= '<li class="li_search"><a href="#"">'. $value->car_license_plate.'</a></li>';
	    			$output .= '<li class="li_search"><a href="#">'. $value->brand_name.'</a></li>';
	    		}
	    		$output .= '</ul>';
	    		echo $output; 
    		} else if ($data['type_search'] == 'tenkhachhang') {
    			$result = DB::table('gara_khachhang')->where('cus_name','like','%'.$convert.'%')->get();

	    		$output = '<ul class="dropdown-menu clos" style="display: block; position: relative;">';
	    		foreach ($result as $key => $value) {
	    			// $output .= '<li class="li_search"><a href="#"">'. $value->car_license_plate.'</a></li>';
	    			$output .= '<li class="li_search"><a href="#">'. $value->cus_name.'</a></li>';
	    		}
	    		$output .= '</ul>';
	    		echo $output; 
    		} else if ($data['type_search'] == 'sdt') {
    			$result = DB::table('gara_khachhang')->where('cus_phone','like','%'.$convert.'%')->get();

	    		$output = '<ul class="dropdown-menu clos" style="display: block; position: relative;">';
	    		foreach ($result as $key => $value) {
	    			// $output .= '<li class="li_search"><a href="#"">'. $value->car_license_plate.'</a></li>';
	    			$output .= '<li class="li_search"><a href="#">'. $value->cus_phone.'</a></li>';
	    		}
	    		$output .= '</ul>';
	    		echo $output; 
    		}
    	}
    }
}
