<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMiddleware
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
        if(Auth::user()->usertype == 'admin') {
            return $next($request);   //Admin 
        }
        elseif(Auth::user()->usertype == 'user') {
            return redirect('userdashboard') ;   //patient dashboard
        }
        elseif(Auth::user()->usertype == 'doctor') {
            return redirect('doctordashboard') ;  //doctor
        }
        elseif(Auth::user()->usertype == 'reception') {
            return redirect('receptiondashboard') ;  //reception
        }
        else {
            return redirect("completeprofile") ; //change the routing after registation here in future 
        }
    }
}
