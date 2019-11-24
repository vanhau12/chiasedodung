<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class Quanly extends Controller
{
    public function trangchu()
    {
        // $data['title'] = "Trang chủ";
        // return view('admin.trangchu',['data'=>$data]);

        $data['title'] = "Trang chủ";
        $data['topitems'] = DB::table('item')->orderBy('view', 'DESC')->limit(5)->get();
        return view('user.trangchu',['data'=>$data]);
    }

    public function duyetdodung()
    {
        $data['title'] = "Duyệt đồ dùng";
        $data['items'] = DB::table('item')->where('status',1)->orderBy('id', 'DESC')->paginate(12);
        return view('admin.duyetdodung',['data'=>$data]);
    }
    public function duyet($id)
    {
        DB::table('item')->where('id',$id)->update([
            'status'=>0
            ]);
        return redirect()->route('duyetdodung');
    }
    public function huy($id)
    {
        DB::table('item')->where('id',$id)->update([
            'status'=>-1
            ]);
        return redirect()->route('duyetdodung');
    }


    public function qlnd()
    {
        $data['title'] = "Quản lý người dùng";
        $data['user'] = DB::table('user')->where('status',0)->get();
        return view('admin.qlnd',['data'=>$data]);
    }
    public function getthemtv()
    {
        $data['title'] = "Thêm thành viên";
        return view('admin.themnguoidung',['data'=>$data]);
    }
    public function themtv(Request $req)
    {
        $this->validate($req,
            [
                'email'=>'unique:user,email',
                'pass'=>'min:6|max:30',
                'cfpass'=>'same:pass',
            ],
            [
                'email.unique'=>'Email đã có người sử dụng',
                'pass.min'=>'Mật khẩu ít nhất 6 kí tự',
                'pass.max'=>'Mật khẩu ít nhất 30 kí tự',
                'cfpass.same'=>'Mật khẩu không giống nhau',
        ]);

        DB::table('user')->insert([
            'name' => $req->name,
            'password' => md5($req->pass),
            'email' => $req->email,
            'phone' => $req->phone,
            'permission' => $req->per,
            'status' => 0
        ]);
        $id = DB::getPdo()->lastInsertId();
        Session::flash('success','Thêm thành viên thành công!');
        return redirect()->route('getthemtv');
    }
    public function xoanguoidung($id)
    {
        DB::table('user')->where('id',$id)->update([
            'status'=>1
            ]);
        return redirect()->route('qlnd');
    }

    public function qldanhmuc()
    {
        $data['title'] = "Quản lý danh mục";
        $data['types'] = DB::table('type_item')->where('status',0)->get();
        return view('admin.qldanhmuc',['data'=>$data]);
    }
    public function themdanhmuc(Request $req)
    {
        $this->validate($req,
            [
                'name'=>'unique:type_item,name',
            ],
            [
                'name.unique'=>'Đã có danh mục sản phẩm',
        ]);

        DB::table('type_item')->insert([
            'name' => $req->name,
            'status'=>0
        ]);
        $id = DB::getPdo()->lastInsertId();
        Session::flash('success','Đã thêm danh mục!');
        return redirect()->route('qldanhmuc');
    }
    public function xoadanhmuc($id)
    {
        DB::table('type_item')->where('id',$id)->update([
            'status'=>1
            ]);
        return redirect()->route('qldanhmuc');
    }
}
