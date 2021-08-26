<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login', 'middleware'=>'CheckLogedIn'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');
	});

	Route::get('logout','HomeController@getLogout');

	Route::group(['prefix'=>'admin', 'middleware'=>'CheckLogedOut'],function(){
		// Trang chủ
		Route::get('/home','HomeController@getHome');

		// Trang thông tin
		Route::get('/info_team','HomeController@getInfoTeam');

		// Thống kê doanh thu
		Route::post('/fillter','HomeController@fillter');
		Route::post('/fillter_select','HomeController@fillter_select');
		Route::post('/order_date','HomeController@order_date');

		// Thống kê chi tiết doanh thu
		Route::post('/total_profit','HomeController@getTotalProfit');

		// Thông báo hoàn thành đặt hàng
		Route::get('complete','BillController@getComplete');

		// Phân quyền
		Route::group(['prefix'=>'permission'],function(){
			Route::get('/','UserController@getUser')->middleware('CheckPermission:user-list');
			//add user
			Route::get('/add_user','UserController@addUser')->middleware('CheckPermission:user-list');
			Route::post('/add_user','UserController@postUser')->middleware('CheckPermission:user-list');
			//edit user
			Route::get('/edit/{id}','UserController@getEditUser')->middleware('CheckPermission:user-list');
			Route::post('/edit/{id}','UserController@postEditUser')->middleware('CheckPermission:user-list');
			//delete user
			Route::get('/delete/{id}','UserController@deleteUser')->middleware('CheckPermission:user-list');
			//detail user
			Route::get('/detail/{id}','UserController@detailUser');
		});

		// Vai trò user
		Route::group(['prefix'=>'role', 'middleware'=>'CheckPermission:role-list'],function(){
			//add role
			Route::get('/','RoleController@addRole');
			Route::post('/','RoleController@postRole');
			//edit role
			Route::get('/edit/{id}','RoleController@getEditRole');
			Route::post('/edit/{id}','RoleController@postEditRole');
			//delete role
			Route::get('/delete/{id}','RoleController@deleteRole');
		});


		//Màn hình tiếp nhận xe:	
		Route::group(['prefix'=>'car_receipt', 'middleware'=>'CheckPermission:car-receipt'],function(){
			Route::get('/', 'CarReceiptController@getInfoPeopleCar');
			Route::post('/','CarReceiptController@postPeopleCar');
			// Danh sách xe đang tiép nhận
			Route::get('/detail', 'CarReceiptController@getInfoDetailPeopleCar');
		});

		// Thêm xóa hiệu xe
		Route::group(['prefix'=>'brand_car', 'middleware'=>'CheckPermission:brand-car'],function(){
			Route::get('/','BrandCarController@getBrandCar');
			Route::post('/','BrandCarController@postBrandCar');
			
			Route::get('/delete/{id}','BrandCarController@deleteBrandCar');
		});

		// Lập phiếu thu tiền
		Route::group(['prefix'=>'bill', 'middleware'=>'CheckPermission:bill'],function(){
			Route::get('/','BillController@getBill');
			Route::post('/','BillController@postBill');
			Route::post('/get_plate','BillController@postBillPlate');
		});

		//Thêm xóa sửa phụ tùng có trong kho
		Route::group(['prefix'=>'store', 'middleware'=>'CheckPermission:storage'],function(){
			Route::get('/','StoreController@getStore');
			Route::post('/','StoreController@postStore');
			
			Route::get('/edit/{id}','StoreController@getEditStore');
			Route::post('/edit/{id}','StoreController@postEditStore');

			Route::get('/delete/{id}','StoreController@deleteStore');
		});

		//Thêm xóa sửa phiếu nhập vật tư phụ tùng
		Route::group(['prefix'=>'import', 'middleware'=>'CheckPermission:import-spare'],function(){
			Route::get('/','ImportController@getImport');
			Route::post('/','ImportController@postImport');
			Route::post('/insert_import','ImportController@postImportPrice');
			
			Route::get('/detail','ImportController@geDetailImport');
		});

		//Thêm xóa sửa tiền công sữa chữa
		Route::group(['prefix'=>'wage', 'middleware'=>'CheckPermission:wage'],function(){
			Route::get('/','WageController@getWage');
			Route::post('/','WageController@postWage');
			
			Route::get('/edit/{id}','WageController@getEditWage');
			Route::post('/edit/{id}','WageController@postEditWage');

			Route::get('/delete/{id}','WageController@deleteWage');
		});

		// Lập phiếu sữa chữa
		Route::group(['prefix'=>'note_repair', 'middleware'=>'CheckPermission:note-repair'],function(){
			Route::get('/','NoteRepairController@getNoteRepair');
			Route::post('/','NoteRepairController@postNoteRepair');
			Route::post('/total','NoteRepairController@postTotal');
			Route::post('/addCart','NoteRepairController@postaddCart');
			// Xóa phiếu sửa chữa
			Route::get('delete/{session_id}','NoteRepairController@removeNoteRepair');
			Route::get('delete_all','NoteRepairController@deleteNoteRepair');
		});

		// Báo cáo tồn kho
		Route::group(['prefix'=>'inventory', 'middleware'=>'CheckPermission:inventory'],function(){
			Route::get('/','InvenController@getInventory');
			Route::post('/','InvenController@postInventory');

			Route::post('/total','InvenController@postTotalInventory');

			Route::get('/detail','InvenController@getDetailInventory');
			Route::post('/detail','InvenController@postDetailInventory');
		});

		// Tra cứu
		Route::group(['prefix'=>'search', 'middleware'=>'CheckPermission:search'],function(){
			Route::get('/','SearchController@getSearch');

			Route::post('/post_search','SearchController@postValueSearch');
			Route::post('/autocomplete_search','SearchController@postAutoSearch');
		});

		// Quy định
		Route::group(['prefix'=>'regulation', 'middleware'=>'CheckPermission:regulation'],function(){
			Route::get('/','ReguController@getRegu');
			Route::post('/','ReguController@postRegu');

			Route::get('/edit/{id}','ReguController@getEditRegu');
			Route::post('/edit/{id}','ReguController@postEditRegu');

			Route::get('/delete/{id}','ReguController@deleteRegu');;
		});
	});
});