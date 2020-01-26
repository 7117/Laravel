<?php

namespace App\Http\Middleware;

use Closure;

class Act
{
    //前置操作
    public function handle($request, Closure $next)
    {
        if (time() < strtotime('2026-09-09')) {
            return redirect('student/act0');
        }

        return $next($request);
    }

    //后置操作
    // public function handle($request, Closure $next)
    // {
    //
    //     $response = $next($request);
    //     echo $response;
    //
    //     echo '后置操作';
    //
    // }



}
