<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class checkActiveUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // dd(var_dump(
        //     Auth::user()->active_status
        // )) ;

        if (Auth::user()->active_status == 1){
            return $next($request) ;
        }
    
        return redirect()->route('checkactive') ;
       

    }
}
