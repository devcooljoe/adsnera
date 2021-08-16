<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class CheckUser
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
        if (auth()->user()->banned()) {
            return redirect('/account/banned');
        }
        if (!Session::has('userchecked')) {
            return redirect('/checkauthuser');
        }
        return $next($request);
    }
}
