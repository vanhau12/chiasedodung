<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        return view('admin.qlnd',['data'=>$data]);
    }

    public function qldd()
    {
        $data['title'] = "Quản lý đồ dùng";
        return view('admin.qldd',['data'=>$data]);
    }
}
