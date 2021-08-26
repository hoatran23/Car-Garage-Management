<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Regulations;
use DB;

class ReguController extends Controller
{
    //
    public function getRegu() {
    	$data['list_regu'] = DB::table('gara_quydinh')->get();
    	// dd($data['list_regu']);
    	return view('regu', $data);
    }

    public function postRegu(Request $request) {
    	$new_regu = new Regulations;
    	$new_regu->regu_id = $request->id;
        $new_regu->regu_name = $request->name;
    	$new_regu->regu_value = $request->value;
    	$new_regu->save();
    	return back();
    }

    public function getEditRegu($id) {
    	$data['regu_detail'] = Regulations::find($id);
    	return view('edit_regu', $data);
    }

    public function postEditRegu(Request $request, $id) {
    	$update_regu = Regulations::find($id);
    	$update_regu->regu_name = $request->name;
    	$update_regu->regu_value = $request->value;
    	$update_regu->save();
    	return redirect()->intended('admin/regulation');
    }

    public function deleteRegu($id) {
		Regulations::destroy($id);
		return back();
    }
}
