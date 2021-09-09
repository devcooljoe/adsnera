<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App\Custom;

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
        if (auth()->user()->promoter() && auth()->user()->account()->first()->status != 'active') {
            return redirect('/account/activate');
        }
        if (auth()->user()->wallet()->first()->amount < 50 && auth()->user()->advertiser()) {
            $tasks = auth()->user()->task()->get();
            foreach ($tasks as $task) {
                $task->update([
                    'status'=>'disabled',
                ]);
            }
            Custom::clear_alert_session();
            $msg = "Your balance is too low! Please fund your wallet to continue.";
            Session::put('alert-msg', $msg);
            return redirect('/advertiser/wallet?alert='.uniqid());
        }
        return $next($request);
    }
}
