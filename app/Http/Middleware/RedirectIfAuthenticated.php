<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */

    // public function handle($request, Closure $next, $guard = null)
    // {
    //     if (Auth::guard()->check()) return redirect(RouteServiceProvider::HOME);
    //     if (Auth::guard('company')->check()) return redirect(RouteServiceProvider::EMPLOYEE_HOME);
        
    //     return $next($request);
    // }

    public function handle($request, Closure $next, $guard = null)
{
    if (Auth::guard()->check()) return redirect(RouteServiceProvider::HOME);
    if (Auth::guard('company')->check()) return redirect(RouteServiceProvider::COMPANY_HOME);

    return $next($request);
}
}
