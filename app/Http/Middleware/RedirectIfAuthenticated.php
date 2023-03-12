<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if ($guard == "masyarakat" && Auth::guard($guard)->check()) { 
                return redirect('/dashboard-masyarakat'); 
            }

            if (Auth::guard($guard)->check()) { 
                if(Auth::guard($guard)->user()->level == 'admin'){
                    return redirect(RouteServiceProvider::HOME); 
                }else{
                    return redirect('dashboard');  
                }
            }
        }

        return $next($request);
    }
}
