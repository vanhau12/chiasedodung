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

Route::post('/gui-yeu-cau/{id}', 'Nguoidung@guiyeucau')->name('guiyeucau');
Route::get('/thich/{id}', 'Nguoidung@thich')->name('thich');
Route::get('/botim/{id}', 'Nguoidung@botim')->name('botim');

Route::get('/dang-do-dung', 'Nguoidung@getdangdodung')->name('getdangdodung');
Route::post('/dang_do_dung', 'Nguoidung@dangdodung')->name('dangdodung');

Route::get('/do-dung-cua-toi/{id}', 'Nguoidung@dodungcuatoi')->name('dodungcuatoi');
Route::get('/xoa-do-dung/{id}', 'Nguoidung@xoadodung')->name('xoadodung');
Route::get('/sua-do-dung/{id}', 'Nguoidung@getsuadodung')->name('getsuadodung');
Route::post('/sua_do_dung/{id}', 'Nguoidung@suadodung')->name('suadodung');

Route::get('/yeu-cau/{id}', 'Nguoidung@yeucau')->name('yeucau');
Route::get('/chap-nhan/{id}', 'Nguoidung@chapnhan')->name('chapnhan');
Route::get('/tu-choi/{id}', 'Nguoidung@tuchoi')->name('tuchoi');
Route::get('/xoa-loi-nhan/{id}', 'Nguoidung@xoaloinhan')->name('xoaloinhan');
Route::get('/yeu-thich/{id}', 'Nguoidung@yeuthich')->name('yeuthich');
Route::get('/bo-thich/{id}', 'Nguoidung@bothich')->name('bothich');



//trang quản lý
Route::get('/quan-ly', 'Quanly@trangchu')->name('quanly');

Route::get('/duyet-do-dung', 'Quanly@duyetdodung')->name('duyetdodung');
Route::get('/huy/{id}', 'Quanly@huy')->name('huy');
Route::get('/duyet/{id}', 'Quanly@duyet')->name('duyet');

Route::get('/quan-ly-nguoi-dung', 'Quanly@qlnd')->name('qlnd');
Route::get('/them-thanh-vien', 'Quanly@getthemtv')->name('getthemtv');
Route::post('/them_thanh_vien', 'Quanly@themtv')->name('themtv');
Route::get('/xoa-nguoi-dung/{id}', 'Quanly@xoanguoidung')->name('xoanguoidung');

Route::get('/quan-ly-danh-muc', 'Quanly@qldanhmuc')->name('qldanhmuc');
Route::post('/them_danh_muc', 'Quanly@themdanhmuc')->name('themdanhmuc');
Route::get('/xoa-danh-muc/{id}', 'Quanly@xoadanhmuc')->name('xoadanhmuc');
