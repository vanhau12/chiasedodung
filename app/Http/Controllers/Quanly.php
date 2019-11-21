<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Quanly extends Controller
{
    public function trangchu()
    {
        $data['title'] = "Trang chủ";
        return view('admin.trangchu',['data'=>$data]);
    }
}
