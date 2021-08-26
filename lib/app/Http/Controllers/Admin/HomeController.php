<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;
use Carbon\Carbon;
use App\Models\Bill;

class HomeController extends Controller
{
    //
    public function getHome() {
        $data['amount_car'] = DB::table('gara_xe')->count();
        $data['amount_brand_car'] = DB::table('gara_hieuxe')->count();
        $data['amount_spare_part'] = DB::table('gara_kho')->count();
        $data['amount_wage'] = DB::table('gara_tiencong')->count();
        $data['amount_user'] = DB::table('gara_user')->count();
        $data['amount_role'] = DB::table('gara_role')->count();
        $data['amount_regu'] = DB::table('gara_quydinh')->count();
        $data['amount_import'] = DB::table('gara_phieunhapvtpt')->count();

        $data['list_brand_car'] = DB::table('gara_hieuxe')->get();
        // dd( $data['list_brand_car']);
    	return view("home", $data);
    }

    public function fillter(Request $request) {
        $data = $request->all();
        $from_date = $data['from_date'];
        $to_date = $data['to_date'];

        $result = DB::table('gara_phieuthutien')->whereBetween('gara_phieuthutien.bill_date', [$from_date, $to_date])->orderBy('gara_phieuthutien.bill_date', 'ASC')->select('gara_phieuthutien.bill_date', 'gara_phieuthutien.bill_money_receive', 'gara_phieuthutien.bill_money_profit')->get();
     
        foreach($result as $key => $val) {
            $chart_data[] = array(
                'date' => $val->bill_date,
                'profit' => $val->bill_money_profit,
                'total' => $val->bill_money_receive
            );
        }
        echo $data = json_encode($chart_data);
    }

    public function order_date(Request $request) {
        $thang_qua = Carbon::now('Asia/Ho_Chi_Minh')->subdays(30)->toDateString();
        $hom_nay = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $result = DB::table('gara_phieuthutien')->whereBetween('gara_phieuthutien.bill_date', [$thang_qua, $hom_nay])->orderBy('gara_phieuthutien.bill_date', 'ASC')->select('gara_phieuthutien.bill_date', 'gara_phieuthutien.bill_money_profit', 'gara_phieuthutien.bill_money_receive')->get();
        foreach($result as $key => $val) {
            $chart_data[] = array(
                'date' => $val->bill_date,
                'profit' => $val->bill_money_profit,
                'total' => $val->bill_money_receive
            );
        }
        echo $data = json_encode($chart_data);
    }

    public function fillter_select(Request $request) {
        $data = $request->all();

        $dau_thang_nay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $dau_thang_truoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $cuoi_thang_truoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();

        $bay_ngay_qua = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
        $nam_qua = Carbon::now('Asia/Ho_Chi_Minh')->subdays(365)->toDateString();

        $hom_nay = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
       
        if ($data['btn_value'] == 'tuanqua') {
            $result = DB::table('gara_phieuthutien')->whereBetween('gara_phieuthutien.bill_date', [$bay_ngay_qua, $hom_nay])->orderBy('gara_phieuthutien.bill_date', 'ASC')->select('gara_phieuthutien.bill_date', 'gara_phieuthutien.bill_money_profit', 'gara_phieuthutien.bill_money_receive')->get();
        } 
        else if ($data['btn_value'] == 'thangtruoc') {
            $result = DB::table('gara_phieuthutien')->whereBetween('gara_phieuthutien.bill_date', [$dau_thang_truoc, $cuoi_thang_truoc])->orderBy('gara_phieuthutien.bill_date', 'ASC')->select('gara_phieuthutien.bill_date', 'gara_phieuthutien.bill_money_profit', 'gara_phieuthutien.bill_money_receive')->get();
        }
        else if ($data['btn_value'] == 'thangnay') {
            $result = DB::table('gara_phieuthutien')->whereBetween('gara_phieuthutien.bill_date', [$dau_thang_nay, $hom_nay])->orderBy('gara_phieuthutien.bill_date', 'ASC')->select('gara_phieuthutien.bill_date', 'gara_phieuthutien.bill_money_profit', 'gara_phieuthutien.bill_money_receive')->get();
        }
        else {
            $result = DB::table('gara_phieuthutien')->whereBetween('gara_phieuthutien.bill_date', [$nam_qua, $hom_nay])->orderBy('gara_phieuthutien.bill_date', 'ASC')->select('gara_phieuthutien.bill_date', 'gara_phieuthutien.bill_money_profit', 'gara_phieuthutien.bill_money_receive')->get();
        }

        foreach($result as $key => $val) {
            $chart_data[] = array(
                'date' => $val->bill_date,
                'profit' => $val->bill_money_profit,
                'total' => $val->bill_money_receive
            );
        }
        echo $data = json_encode($chart_data);
    }

    public function getTotalProfit(Request $request) {
        $data = $request->all();

        $date = explode("-",  $data['get_month']);
        $month = $date[1];
        $year = $date[0];

        $total = Bill::whereYear('bill_date', '=', $year)->whereMonth('bill_date', '=', $month)->get();
        $result = DB::table('gara_hieuxe')->join('gara_xe', 'gara_hieuxe.brand_car_id', 'gara_xe.car_brand')->join('gara_phieusuachua', 'gara_xe.car_license_plate', 'gara_phieusuachua.note_repair_license_plate')->whereYear('gara_xe.car_date_receipt', '=', $year)->whereMonth('gara_xe.car_date_receipt', '=', $month)->get();
        // $amount_brand = DB::table('gara_hieuxe')->count();
        $list_brand_car = DB::table('gara_hieuxe')->get();
        // return $amount_brand;
        return [$total, $result, $list_brand_car];
    }

    public function getLogout() {
    	Auth::logout();
    	return redirect()->intended('login');
    }

    public function getInfoTeam() {
    	return view('info_team');
    }
}
