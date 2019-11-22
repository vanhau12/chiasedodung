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
    public function gettttaikhoan($id)
    {
        $data['title'] = "Thông tin tài khoản";
        $data['user'] = DB::table('user')->where('id',$id)->first();
        return view('user.thongtintaikhoan',['data'=>$data]);
    }
    public function tttaikhoan($id,Request $req)
    {
        DB::table('user')->where('id',$id)
            ->update([
                'name' => $req->name,
                'phone' => $req->phone
                ]);
        return redirect()->route('gettttaikhoan',$id)->with('success', 'Cập nhật thành công!');
    }
    public function getdoimatkhau()
    {
        $data['title'] = "Đổi mật khẩu";
        return view('user.doimatkhau',['data'=>$data]);
    }
    public function doimatkhau($id,Request $req)
    {
        $this->validate($req,
            [
                'mkmoi'=>'min:6|max:30',
                'cfmkmoi'=>'same:mkmoi',
            ],
            [
                'mkmoi.min'=>'Mật khẩu ít nhất 6 kí tự',
                'mkmoi.max'=>'Mật khẩu nhiều nhất 30 kí tự',
                'cfmkmoi.same'=>'Nhập lại khẩu mới không đúng',
            ]);
        $user = DB::table('user')->where('id',$id)->first();
        if(md5($req->mkcu) == $user->password){
            DB::table('user')->where('id', $user->id)->update(['password' => md5($req->mkmoi)]);
            return redirect()->route('getdoimatkhau')->with('success', 'Đổi mật khẩu thành công!');
        }else{
            return redirect()->route('getdoimatkhau')->with('false', 'Mật khẩu cũ không đúng!');
        }
    }

    public function dodungchiase()
    {
        $data['title'] = "Đồ dùng chia sẻ";
        $data['types'] = DB::table('type_item')->get();
        $data['items'] = DB::table('item')->where('status',0)->paginate(6);
        $data['topitems'] = DB::table('item')->orderBy('view', 'DESC')->limit(5)->get();
        $data['places'] = array('Hà Nội','Hải Phòng','TP.Hồ Chí Minh');

        $data['tongso'] = count(DB::table('item')->where('status',0)->get());
        return view('user.dodung',['data'=>$data]);
    }
    public function danhmuc($type_id)
    {
        $data['title'] = "Đồ dùng chia sẻ";
        $data['types'] = DB::table('type_item')->get();
        $data['items'] = DB::table('item')->where('status',0)->where('type_id',$type_id)->paginate(6);
        $data['topitems'] = DB::table('item')->orderBy('view', 'DESC')->limit(5)->get();
        $data['places'] = array('Hà Nội','Hải Phòng','TP.Hồ Chí Minh');

        $data['tongso'] =count(DB::table('item')->where('status',0)->where('type_id',$type_id)->get());
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
    public function dangdodung(Request $req)
    {
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $name = $this->imagename($file->getClientOriginalName());
            // $avatar = time() . "_news_" . $name;
            // while (file_exists('images/news/' . $avatar)) {
            //     $avatar = time() . "_news_" . $name;
            // }
            $file->move('imagesitems/', $name);

            $image = $name;
        } else {
            $image = 'default.jpg';
        }
        DB::table('item')->insert([
            'type_id'=>$req->type,
            'user_id'=>Session('login'),
            'name'=>$req->name,
            'request'=>$req->yeucau,
            'image'=>$image,
            'place'=>$req->place,
            'description'=>$req->des,
            'view'=>0,
            'status'=>1
        ]);
        return redirect()->route('getdangdodung')->with('success', 'Chia sẻ đồ dùng thành công! Chờ xét duyệt!');
    }

    public function dodungcuatoi($id)
    {
        $data['title'] = "Đồ dùng của tôi";
        $data['postitems'] = DB::table('item')->where('status',0)->where('user_id',$id)->orderBy('id','DESC')->paginate(3);
        $data['waititems'] = DB::table('item')->where('status',1)->where('user_id',$id)->orderBy('id','DESC')->paginate(3);
        return view('user.dodungcuatoi',['data'=>$data]);
    }
    public function xoadodung($id)
    {
        DB::table('item')->where('id',$id)->delete();
        return redirect()->route('dodungcuatoi',Session('login'));
    }
    public function getsuadodung($id)
    {
        $data['title'] = "Đồ dùng của tôi";
        $data['types'] = DB::table('type_item')->get();
        $data['item'] = DB::table('item')->where('id',$id)->first();
        // var_dump($data['item']);
        // die();

        return view('user.suadodung',['data'=>$data]);
    }
    public function suadodung($id,Request $req)
    {
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $name = $this->imagename($file->getClientOriginalName());
            $file->move('imagesitems/', $name);
            $image = $name;

            DB::table('item')->where('id',$id)->update([
            'type_id'=>$req->type,
            'user_id'=>Session('login'),
            'name'=>$req->name,
            'request'=>$req->yeucau,
            'image'=>$image,
            'place'=>$req->place,
            'description'=>$req->des,
            'view'=>0,
            'status'=>1
        ]);
        } else {
            DB::table('item')->where('id',$id)->update([
            'type_id'=>$req->type,
            'user_id'=>Session('login'),
            'name'=>$req->name,
            'request'=>$req->yeucau,
            'place'=>$req->place,
            'description'=>$req->des,
            'view'=>0,
            'status'=>1
        ]);
        }
        return redirect()->route('getsuadodung',$id)->with('success', 'Cập nhật thành công! Chờ xét duyệt!');
    }
}
