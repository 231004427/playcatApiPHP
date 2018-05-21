<?php

namespace App\Http\Middleware;
use Log;
use Closure;
use URL;
class Auth
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

        //这里是响应后调用的方法
        Log::debug('Auth:'.url()->full());

        if ($request->input('token') != '123'){
            //return redirect()->to(route('login'));
        }
        return $next($request);
    }
}
