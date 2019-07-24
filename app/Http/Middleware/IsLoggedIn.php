<?php

namespace App\Http\Middleware;

use Closure;
use Session;
class IsLoggedIn
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
        if(!session::has('username')&&!session::has('useremail')){
            //return $next($request);
        }
        //retrun redirect('adminPanel');
        //return $next($request);
    }
}
