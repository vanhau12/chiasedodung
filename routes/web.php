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

//trang người dùng
Route::get('/', 'Nguoidung@trangchu')->name('trangchu');

Route::post('/dang-nhap', 'Nguoidung@dangnhap')->name('dangnhap');
Route::post('/dang-ky', 'Nguoidung@dangky')->name('dangky');
Route::get('/dang-xuat', 'Nguoidung@dangxuat')->name('dangxuat');
Route::get('/thong-tin-tai-khoan/{id}', 'Nguoidung@gettttaikhoan')->name('gettttaikhoan');
Route::post('/thong_tin_tai_khoan/{id}', 'Nguoidung@tttaikhoan')->name('tttaikhoan');
Route::get('/doi-mat-khau', 'Nguoidung@getdoimatkhau')->name('getdoimatkhau');
Route::post('/doi_mat_khau/{id}', 'Nguoidung@doimatkhau')->name('doimatkhau');

Route::get('/do-dung-chia-se', 'Nguoidung@dodungchiase')->name('dodungchiase');
Route::get('/danh-muc-do-dung/{id}', 'Nguoidung@danhmuc')->name('danhmuc');
Route::get('/chi-tiet-do-dung/{id}', 'Nguoidung@chitiet')->name('chitiet');

Route::get('/dang-do-dung', 'Nguoidung@getdangdodung')->name('getdangdodung');
Route::post('/dang_do_dung', 'Nguoidung@dangdodung')->name('dangdodung');



//trang quản lý
Route::get('/quan-ly', 'Quanly@trangchu')->name('quanly');
