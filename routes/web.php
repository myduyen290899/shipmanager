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
    return view('guess.home');
});



Route::namespace('App\Http\Controllers')->group( function() {
	Route::get('dang-nhap', 'UserController@getForm');
	Route::post('dang-nhap', 'UserController@postForm')->name('postDangNhap');
	Route::get('/danh-gia', 'DanhGiaController@getDanhGia')->name('danhGia.list');
	Route::post('/danh-gia', 'DanhGiaController@postDanhGia')->name('danhGia.add');
	Route::get('/dang-ki', 'DangKiController@getDangKi')->name('dangKi.list');
	Route::post('/dang-ki', 'DangKiController@postDangKi')->name('dangKi.add');

	Route::group( ['prefix' => 'admin' ], function() {
		Route::get('/', 'AdminController@index');
		Route::get('/danh-gia', 'DanhGiaController@getDanhGiaAdmin')->name('danhGia.listAdmin');
		Route::post('/danh-gia', 'DanhGiaController@postDanhGiaAdmin')->name('danhGia.addAdmin');
		Route::get('/ung-vien', 'DangKiController@getUngVien')->name('dangKi.getUngVien');
		Route::get('/su-kien', 'EventController@getEventAdmin')->name('sukien.listAdmin');
		Route::post('/su-kien', 'EventController@postEventAdmin')->name('sukien.addAdmin');
		Route::get('/nhan-vien', 'NhanVienController@getNhanVienAdmin')->name('nhanvien.listAdmin');
		Route::post('/nhan-vien', 'NhanVienController@postNhanVienAdmin')->name('nhanvien.addAdmin');
		Route::post('/them-nhanvien','NhanVienController@themnhanvien');
		Route::get('/xoa-nhanvien/{manv}','NhanVienController@xoanhanvien');
		Route::post('/sua-nhanvien','NhanVienController@suanhanvien');
		Route::get('/chi-tiet/{id}','DangKiController@getListUngVien');
		Route::get('/xoa-ung-vien/{id}','DangKiController@xoaUngVien');

		
	});

	
	
});
Route::namespace('App\Http\Controllers')->group( function() {
Route::group( ['prefix' => 'tongdai' ], function() {
	Route::get('/', 'TongDaiController@tongdai');
	Route::get('/danh-gia', 'DanhGiaController@getDanhGiaTongDai')->name('danhGia.listTongDai');
	Route::post('/danh-gia', 'DanhGiaController@postDanhGiaTongDai')->name('danhGia.addTongDai');
	Route::get('/don-hang', 'DonHangController@getDonHangTongDai')->name('donhang.listTongDai');
	Route::post('/don-hang', 'DonHangController@postDonHangTongDai')->name('donhang.addTongDai');

	Route::post('/them-donhang','DonHangController@themdonhang');

});
});

Route::namespace('App\Http\Controllers')->group( function() {
	Route::group( ['prefix' => 'shipper' ], function() {
	Route::get('/', 'ShipperController@index');

	Route::get('/danh-gia', 'DanhGiaController@getDanhGiaShipper')->name('danhGia.listShipper');
	Route::post('/danh-gia', 'DanhGiaController@postDanhGiaShipper')->name('danhGia.addShipper');
	});
});