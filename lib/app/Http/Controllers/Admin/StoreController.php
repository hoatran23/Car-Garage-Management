<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\ImportSpareParts;
use App\Models\StoreSpareParts;

class StoreController extends Controller
{
    //
    public function getStore() {
    	$data['list_store'] = DB::table("gara_kho")->get();
        $amount_spare = count(StoreSpareParts::get());
        $amount_regu = DB::table('gara_quydinh')->where('gara_quydinh.regu_id', 'QD3')->pluck('regu_value')[0];
        $percent = round(($amount_spare * 100 / $amount_regu), 1);
    	return view("store", $data)->with(compact('percent', 'amount_spare', 'amount_regu'));
    }

    public function postStore(Request $request) {
        // DB::table("gara_phieunhapvtpt")->get();
        $amout_spare = count(StoreSpareParts::get());
        // dd($amout_spare);
        $data = DB::table('gara_quydinh')->where('gara_quydinh.regu_id', 'QD3')->pluck('regu_value');
        // dd($data[0]);
        if ($amout_spare < $data[0]) {
        	$new_spare_part = new StoreSpareParts;
        	$new_spare_part->store_spare_name = $request->name;
        	$new_spare_part->store_quantity_avail = 0;
        	$new_spare_part->store_cost = $request->cost;
        	$new_spare_part->save();
        	return back()->with('success', 'Thành công. Phụ tùng đã được thêm vào kho!!!'); 
        } else {
            return back()->with('status', 'Không thành công do số lượng phụ tùng trong kho đã đạt tối đa!!!'); 
        }
    }

    public function getEditStore($id) {
    	// $data['store_spare_part'] = DB::table("gara_kho")->where("gara_kho.store_id", $id)->get()->all();
    	$data['store_spare_part'] = StoreSpareParts::find($id);
    	// dd($data['store_spare_part']);
    	return view("edit_store", $data);
    }

    public function postEditStore(Request $request, $id) {
    	$update_spare_part = StoreSpareParts::find($id);
    	$update_spare_part->store_spare_name = $request->name;
    	$update_spare_part->store_cost = $request->cost;
    	$update_spare_part->save();
    	return redirect()->intended('admin/store')->with('success', 'Thành công. Giá phụ tùng đã được cập nhật!!!');;
    }

    public function deleteStore($id) {
    	StoreSpareParts::destroy($id);
    	return back()->with('status', 'Thành công. Đã xóa phụ tùng!!!');
    }
}
