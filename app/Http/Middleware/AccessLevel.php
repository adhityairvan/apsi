<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AccessLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role = 'empty')
    {
        if(Auth::check() != True ){
            return redirect()->route('home');
        }
        if(Auth::user()->profil_type == $role){
            return $next($request);
        }
        else if (Auth::user()->profil_type =='owner'){
            return $next($request);
        }
        else return redirect()->back();
    }
}
