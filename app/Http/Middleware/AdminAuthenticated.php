<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminAuthenticated
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
        if(Auth::check()){
            
            if( Auth::user()->isAdmin()){

                return redirect(route('admin_dashboard'));

            }elseif(Auth::user()->isUser()){

                return $next($request);
            }
        }

        abort(404); //for other kinds of users
    }
    
}
