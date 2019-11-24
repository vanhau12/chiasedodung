<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class login
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
        if(Session::has('login')){
            return $next($request);
        }
        else{
            echo "<script type='text/javascript'>var r = confirm('Bạn chưa đăng nhập');if(r){document.location = '".route('trangchu')."';  }</script>";
        }
    }
}
