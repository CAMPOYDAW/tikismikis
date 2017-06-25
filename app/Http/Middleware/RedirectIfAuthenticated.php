<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {

        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }else{
            $us=User::where('email','=',$request['email'])->first();
        //dd($us);
           if( $us['baja']==1){
               if($us['type']=='user'){
                   return redirect('/login-public');
               }
               return redirect('/login');
           }
        }

        return $next($request);
    }
}
