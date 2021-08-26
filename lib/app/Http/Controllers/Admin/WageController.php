<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Wage;

class WageController extends Controller
{
    //
    public function getWage() {
    	$data['list_wage'] = DB::table("gara_tiencong")->get();
        $amout_wage = count(Wage::get());
        $amount_regu = DB::table('gara_quydinh')->where('gara_quydinh.regu_id', 'QD4')->pluck('regu_value')[0];
        $percent = round(($amout_wage * 100 / $amount_regu), 1);
    	return view("wage", $data)->with(compact('percent', 'amout_wage', 'amount_regu'));
    }

    public function postWage(Request $request) {
        $amout_wage = count(Wage::get());
        $amount_regu = DB::table('gara_quydinh')->where('gara_quydinh.regu_id', 'QD4')->pluck('regu_value')[0];

        if ($amout_wage < $amount_regu) {
        	$new_wage = new Wage;
        	$new_wage->wage_name = $request->name;
        	$new_wage->wage_cost = $request->cost;
        	$new_wage->save();
        	return back()->with('success', 'Thành công. Tiền công đã được thêm!!!'); 
        } else {
            return back()->with('status', 'Không thành công do số loại tiền công đã đạt tối đa!!!'); 
        }
    }

    public function getEditWage($id) {
        $data['detail_wage'] = Wage::find($id);
        // dd($data['detail_wage']);
        return view('edit_wage', $data);
    }

    public function postEditWage(Request $request, $id) {
        $update_wage = Wage::find($id);
        $update_wage->wage_name = $request->name;
        $update_wage->wage_cost = $request->cost;
        $update_wage->save();
        return redirect()->intended('admin/wage')->with('success', 'Thành công. Tiền công đã được cập nhật!!!'); ;
    }

    public function deleteWage($id) {
        Wage::destroy($id);
        return back()->with('success', 'Thành công. Tiền công đã xóa!!!'); ;
    }
}
