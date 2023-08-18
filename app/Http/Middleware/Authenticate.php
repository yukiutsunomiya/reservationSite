<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    /*
    protected function redirectTo(Request $request): ?string
    {
        return $request->expectsJson() ? null : route('login');
    }
    */
    
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if($request->is('admin') || $request->is('admin/*')){   //追記
                return url('/admin/login');           //追記
            }else{
                return url('/');
            }                                                       //追記
            //return url('/');
            //return route('login');
        }
    }
}
