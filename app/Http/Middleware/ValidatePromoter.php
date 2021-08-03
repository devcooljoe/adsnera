<?php

namespace App\Http\Middleware;

use Closure;

class ValidatePromoter
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
        if (auth()->user()->promoter()) {
            return $next($request);
        }else {
            return redirect()->back();
        }
    }
}
