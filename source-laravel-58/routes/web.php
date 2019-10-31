<?php

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
Route::prefix('/')->group(function(){
	Route::get('/', 'LinhVucController@index')->name('linh-vuc.danh-sach');
	
});
Route::prefix('linh-vuc')->group(function(){
	Route::get('/', 'LinhVucController@index')->name('linh-vuc.danh-sach');
	Route::get('them-moi', 'LinhVucController@create')->name('linh-vuc.them-moi');
	Route::post('them-moi', 'LinhVucController@store')->name('linh-vuc.xl-them-moi');
	Route::get('cap-nhat/{id}', 'LinhVucController@edit')->name('linh-vuc.cap-nhat');
	Route::post('cap-nhat/{id}', 'LinhVucController@update')->name('linh-vuc.xl-cap-nhat');
	Route::get('xoa/{id}', 'LinhVucController@destroy')->name('linh-vuc.xoa');
});

Route::prefix('cau-hoi')->group(function(){
	Route::get('/', 'CauHoiController@index')->name('cau-hoi.danh-sach');
	Route::get('them-moi', 'CauHoiController@create')->name('cau-hoi.them-moi');
	Route::post('them-moi', 'CauHoiController@store')->name('cau-hoi.xl-them-moi');
	Route::get('cap-nhat/{id}', 'CauHoiController@edit')->name('cau-hoi.cap-nhat');
	Route::post('cap-nhat/{id}', 'CauHoiController@update')->name('cau-hoi.xl-cap-nhat');
	Route::get('xoa/{id}', 'CauHoiController@destroy')->name('cau-hoi.xoa');
});

Route::prefix('nguoi-choi')->group(function(){
	Route::get('/', 'NguoiChoiController@index')->name('nguoi-choi.danh-sach');
	Route::get('them-moi', 'NguoiChoiController@create')->name('nguoi-choi.them-moi');
	Route::post('them-moi', 'NguoiChoiController@store')->name('nguoi-choi.xl-them-moi');
	Route::get('cap-nhat/{id}', 'NguoiChoiController@edit')->name('nguoi-choi.cap-nhat');
	Route::post('cap-nhat/{id}', 'NguoiChoiController@update')->name('nguoi-choi.xl-cap-nhat');
	Route::get('xoa/{id}', 'NguoiChoiController@destroy')->name('nguoi-choi.xoa');
});
Route::prefix('lich-su-mua-credit')->group(function(){
	Route::get('/', 'LichSuMuaCreditController@index')->name('lich-su-mua-credit.danh-sach');
	Route::get('them-moi', 'LichSuMuaCreditController@create')->name('lich-su-mua-credit.them-moi');
	Route::post('them-moi', 'LichSuMuaCreditController@store')->name('lich-su-mua-credit.xl-them-moi');
	Route::get('cap-nhat/{id}', 'LichSuMuaCreditController@edit')->name('lich-su-mua-credit.cap-nhat');
	Route::post('cap-nhat/{id}', 'LichSuMuaCreditController@update')->name('lich-su-mua-credit.xl-cap-nhat');
	Route::get('xoa/{id}', 'LichSuMuaCreditController@destroy')->name('lich-su-mua-credit.xoa');
});
Route::prefix('luot-choi')->group(function(){
	Route::get('/', 'LuotChoiController@index')->name('luot-choi.danh-sach');
	Route::get('them-moi', 'LuotChoiController@create')->name('luot-choi.them-moi');
	Route::post('them-moi', 'LuotChoiController@store')->name('luot-choi.xl-them-moi');
	Route::get('cap-nhat/{id}', 'LuotChoiController@edit')->name('luot-choi.cap-nhat');
	Route::post('cap-nhat/{id}', 'LuotChoiController@update')->name('luot-choi.xl-cap-nhat');
	Route::get('xoa/{id}', 'LuotChoiController@destroy')->name('luot-choi.xoa');
});
Route::prefix('goi-credit')->group(function(){
	Route::get('/', 'GoiCreditController@index')->name('goi-credit.danh-sach');
	Route::get('them-moi', 'GoiCreditController@create')->name('goi-credit.them-moi');
	Route::post('them-moi', 'GoiCreditController@store')->name('goi-credit.xl-them-moi');
	Route::get('cap-nhat/{id}', 'GoiCreditController@edit')->name('goi-credit.cap-nhat');
	Route::post('cap-nhat/{id}', 'GoiCreditController@update')->name('goi-credit.xl-cap-nhat');
	Route::get('xoa/{id}', 'GoiCreditController@destroy')->name('goi-credit.xoa');
});