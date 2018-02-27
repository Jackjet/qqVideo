<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthGuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null, $type = null)
    {
        if (Auth::guard($guard)->check()) {
            switch ($type){
                case "admin":
                    $route = 'admin.index.index';
                    break;
                case "home":
                    $route = 'home.member.index';
                    break;
                case "mobile":
                    $route = 'mobile.member.index';
                    break;
            }
            return redirect()->route($route);
        }
        return $next($request);
    }
}
