<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next, $guard = null, $type = null)
    {
        if (!Auth::guard($guard)->check()) {
            switch ($type){
                case "admin":
                    $route = 'admin.login';
                    break;
                case "home":
                    $route = 'home.member.login';
                    break;
                case "mobile":
                    $route = 'mobile.member.login';
                    break;
            }
            return redirect()->route($route);
        }
        return $next($request);
    }
}
