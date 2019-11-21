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

Route::get('/do-dung-chia-se', 'Nguoidung@dodungchiase')->name('dodungchiase');
Route::get('/danh-muc-do-dung/{id}', 'Nguoidung@danhmuc')->name('danhmuc');
Route::get('/chi-tiet-do-dung/{id}', 'Nguoidung@chitiet')->name('chitiet');

Route::get('/dang-do-dung', 'Nguoidung@getdangdodung')->name('getdangdodung');
Route::post('/dang_do_dung', 'Nguoidung@dangdodung')->name('dangdodung');
