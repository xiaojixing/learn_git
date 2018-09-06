<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/home');
            $arr = 1;
            $arr = 2;
            $arr = 3;
            $arr = 4;
         // 小明提交
         // 小明提交
         // 小明提交
           //吉星提交
           //吉星提交
           //吉星提交
           //修复后再次提交
           //sss
           //ssss
           //sss
           //hahahahah

        }

        return $next($request);
    }
}
