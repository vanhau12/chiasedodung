<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Session::has('admin')){
            return $next($request);
        }
        else{
            echo "<script type='text/javascript'>var r = confirm('Bạn không có quyền vào trang quản lý!');if(r){document.location = '".route('trangchu')."';  }</script>";
        }
    }
}
