<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AccessLevelPenyewa
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
        if((!Auth::guest()) && (Auth::user()->profil_type == 'App\ProfilPenyewa')){
            return $next($request);
        }
        else
            return redirect()->back();
    }
}
