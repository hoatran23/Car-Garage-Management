<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\ImportSpareParts; 
use App\Models\StoreSpareParts; 

class ImportController extends Controller
{
    //
    public function getImport() {
    	$data['list_spare_part'] = DB::table("gara_kho")->get();
    	// $data['list_spare_part'] = DB::table("gara_kho")->get();
    	// dd($data['list_spare_part']);
    	return view("import", $data);
    }

    public function postImport(Request $request) {
    	date_default_timezone_set("Asia/Ho_Chi_Minh");
        $date = getdate();
        $amount_avail_id = $request->tenVTPT;
        // $new_import->import_date = $date['year']."-".$date['mon']."-".$date['mday'];
    	// $new_import->save();

    	$amount = StoreSpareParts::find($amount_avail_id);
        // dd($amount->store_quantity_avail);
        if ($amount->store_quantity_avail == 0) {
            $new_import = new ImportSpareParts;
            $new_import->import_spare_id = $request->tenVTPT;
            $new_import->import_quantity = $request->quantity;
            $new_import->import_date = $request->date;
            $new_import->save();

        	$amount->store_quantity_avail += $new_import->import_quantity;
    		$amount->save();

        	return back()->with('success', 'Nhập vật tư vào kho thành công!!!');
        }
        return back()->with('status', 'Không thành công do trong kho vẫn còn phụ tùng!!!');
    }

    public function postImportPrice(Request $request) {
    	$new_spare_parts = $request->all();

    	$price = DB::table("gara_kho")->where("gara_kho.store_id", $new_spare_parts["id_spare_store"])->get();
    	return json_encode($price);
    }

    public function geDetailImport() {
        $data['detail_import'] = DB::table("gara_phieunhapvtpt")->join('gara_kho', 'gara_phieunhapvtpt.import_spare_id', 'gara_kho.store_id')->get();
        // dd($data['detail_import']);
        return view('import_detail', $data);
    }
}
