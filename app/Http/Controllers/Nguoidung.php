<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class Nguoidung extends Controller
{
    public function trangchu()
    {
        $data['title'] = "Trang chủ";
        $data['topitems'] = DB::table('item')->orderBy('view', 'DESC')->limit(5)->get();
        return view('user.trangchu',['data'=>$data]);
    }

    public function dangnhap(Request $req)
    {
        $user = DB::table('user')->where('email',$req->email)->first();

        if(!is_null($user) && md5($req->pass) == $user->password ){
            Session::flush();
            Session::put('login',$user->id);
            if($user->permission == 1){
                Session::put('admin',$user->id);
            }
            return redirect()->route('trangchu');

        }
        else{
            Session::flush();
            echo "<script type='text/javascript'>var r = confirm('Sai tài khoản và mật khẩu');if(r){document.location = '".route('trangchu')."';  }</script>";
        }
    }

    public function dangky(Request $req)
    {
        $user = DB::table('user')->where('email',$req->email)->first();
        if(!is_null($user)){
            echo "<script type='text/javascript'>var r = confirm('Email đã tồn tại. Quay lại trang chủ ?');if(r){document.location = '".route('trangchu'). "';  }</script>";
        }else{
            if(strlen($req->pass) < 6){
                 echo "<script type='text/javascript'>var r = confirm('Mật khẩu phải ít nhất ký tự 6. Quay lại trang chủ ?');if(r){document.location = '".route('trangchu'). "';  }</script>";
            }else{
                if($req->pass != $req->cfpass){
                echo "<script type='text/javascript'>var r = confirm('Mật khẩu nhập lại không đúng. Quay lại trang chủ ?');if(r){document.location = '".route('trangchu'). "';  }</script>";
                }else{
                    DB::table('user')->insert([
                        'name' => $req->name,
                        'password' => md5($req->pass),
                        'email' => $req->email,
                        'phone' => $req->phone,
                        'permission' => 0,
                        'status' => 0
                    ]);
                    $id = DB::getPdo()->lastInsertId();
                    Session::flush();
                    Session::put('login',$id);
                    return redirect()->route('trangchu');
                }
            }
        }
    }
    public function dangxuat()
    {
        Session::flush();
        return redirect()->route('trangchu');
    }

    public function dodungchiase()
    {
        $data['title'] = "Đồ dùng chia sẻ";
        $data['types'] = DB::table('type_item')->get();
        $data['items'] = DB::table('item')->paginate(6);
        $data['topitems'] = DB::table('item')->orderBy('view', 'DESC')->limit(5)->get();
        $data['places'] = array('Hà Nội','Hải Phòng','TP.Hồ Chí Minh');

        $data['tongso'] = count(DB::table('item')->get());
        return view('user.dodung',['data'=>$data]);
    }
    public function danhmuc($type_id)
    {
        $data['title'] = "Đồ dùng chia sẻ";
        $data['types'] = DB::table('type_item')->get();
        $data['items'] = DB::table('item')->where('type_id',$type_id)->paginate(6);
        $data['topitems'] = DB::table('item')->orderBy('view', 'DESC')->limit(5)->get();
        $data['places'] = array('Hà Nội','Hải Phòng','TP.Hồ Chí Minh');

        $data['tongso'] =count(DB::table('item')->where('type_id',$type_id)->get());
        return view('user.dodung',['data'=>$data]);
    }

    public function chitiet($id)
    {
        $item = DB::table('item')->where('id',$id)->first();
        $data['title'] = "Chi tiết đồ dùng";
        $data['item'] = $item;
        $data['topitems'] = DB::table('item')->orderBy('view', 'DESC')->limit(5)->get();
        // $item->view = $item->view+1;
        // DB::table('item')->where('id',$id)->insert([
        //     'view' => $item->view
        // ]);
        // die();
        $data['type'] = DB::table('type_item')->where('id',$item->type_id)->first();
        $data['user'] = DB::table('user')->where('id',$item->user_id)->first();
        return view('user.chitietdodung',['data'=>$data]);
    }
    public function getdangdodung()
    {
        $data['title'] = "Chia sẻ đồ dùng";
        $data['types'] = DB::table('type_item')->get();
        return view('user.dangdodung',['data'=>$data]);
    }
}
