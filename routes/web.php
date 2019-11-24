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

Route::get('/thong-tin-tai-khoan/{id}', 'Nguoidung@gettttaikhoan')->name('gettttaikhoan')->middleware('login');
Route::post('/thong_tin_tai_khoan/{id}', 'Nguoidung@tttaikhoan')->name('tttaikhoan')->middleware('login');
Route::get('/doi-mat-khau', 'Nguoidung@getdoimatkhau')->name('getdoimatkhau')->middleware('login');
Route::post('/doi_mat_khau/{id}', 'Nguoidung@doimatkhau')->name('doimatkhau')->middleware('login');

Route::get('/do-dung-chia-se', 'Nguoidung@dodungchiase')->name('dodungchiase');
Route::get('/danh-muc-do-dung/{id}', 'Nguoidung@danhmuc')->name('danhmuc');
Route::get('/chi-tiet-do-dung/{id}', 'Nguoidung@chitiet')->name('chitiet');

Route::post('/gui-yeu-cau/{id}', 'Nguoidung@guiyeucau')->name('guiyeucau')->middleware('login');
Route::get('/thich/{id}', 'Nguoidung@thich')->name('thich')->middleware('login');
Route::get('/botim/{id}', 'Nguoidung@botim')->name('botim')->middleware('login');

Route::get('/dang-do-dung', 'Nguoidung@getdangdodung')->name('getdangdodung')->middleware('login');
Route::post('/dang_do_dung', 'Nguoidung@dangdodung')->name('dangdodung')->middleware('login');

Route::get('/do-dung-cua-toi/{id}', 'Nguoidung@dodungcuatoi')->name('dodungcuatoi')->middleware('login');
Route::get('/xoa-do-dung/{id}', 'Nguoidung@xoadodung')->name('xoadodung')->middleware('login');
Route::get('/sua-do-dung/{id}', 'Nguoidung@getsuadodung')->name('getsuadodung')->middleware('login');
Route::post('/sua_do_dung/{id}', 'Nguoidung@suadodung')->name('suadodung')->middleware('login');

Route::get('/yeu-cau/{id}', 'Nguoidung@yeucau')->name('yeucau')->middleware('login');
Route::get('/chap-nhan/{id}', 'Nguoidung@chapnhan')->name('chapnhan')->middleware('login');
Route::get('/tu-choi/{id}', 'Nguoidung@tuchoi')->name('tuchoi')->middleware('login');
Route::get('/xoa-loi-nhan/{id}', 'Nguoidung@xoaloinhan')->name('xoaloinhan')->middleware('login');
Route::get('/yeu-thich/{id}', 'Nguoidung@yeuthich')->name('yeuthich')->middleware('login');
Route::get('/bo-thich/{id}', 'Nguoidung@bothich')->name('bothich')->middleware('login');



//trang quản lý
Route::get('/quan-ly', 'Quanly@trangchu')->name('quanly')->middleware('admin');

Route::get('/duyet-do-dung', 'Quanly@duyetdodung')->name('duyetdodung')->middleware('admin');
Route::get('/huy/{id}', 'Quanly@huy')->name('huy')->middleware('admin');
Route::get('/duyet/{id}', 'Quanly@duyet')->name('duyet')->middleware('admin');

Route::get('/quan-ly-nguoi-dung', 'Quanly@qlnd')->name('qlnd')->middleware('admin');
Route::get('/them-thanh-vien', 'Quanly@getthemtv')->name('getthemtv')->middleware('admin');
Route::post('/them_thanh_vien', 'Quanly@themtv')->name('themtv')->middleware('admin');
Route::get('/xoa-nguoi-dung/{id}', 'Quanly@xoanguoidung')->name('xoanguoidung')->middleware('admin');

Route::get('/quan-ly-danh-muc', 'Quanly@qldanhmuc')->name('qldanhmuc')->middleware('admin');
Route::post('/them_danh_muc', 'Quanly@themdanhmuc')->name('themdanhmuc')->middleware('admin');
Route::get('/xoa-danh-muc/{id}', 'Quanly@xoadanhmuc')->name('xoadanhmuc')->middleware('admin');
