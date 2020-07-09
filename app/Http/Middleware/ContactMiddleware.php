<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class ContactMiddleware
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
        if(Auth::guard('admin')->check() && (Auth::guard('admin')->user()->role ==0 || Auth::guard('admin')->user()->role ==3) ){
            return $next($request);
        }else{
            return redirect()->route('adminLogin');
        }
    }
}
