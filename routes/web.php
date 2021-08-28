<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// DEFAULT ROUTES
Auth::routes();
Auth::routes(['verify' => true]);
Route::middleware(['auth', 'verified'])->get('/account/banned', function () {
    if (auth()->user()->banned()) {
        return view('auth.banned');
    }else {
        return redirect('/');
    }
    
});

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/account/profile', 'DashboardController@view_profile');
    Route::get('/account/profile/new_bank', 'DashboardController@view_new_bank');
    Route::middleware('userchecked')->post('/account/profile/new_bank', 'DashboardController@add_new_bank');
    Route::get('/account/profile/edit_bank', 'DashboardController@view_edit_bank');
    Route::middleware('userchecked')->post('/account/profile/edit_bank', 'DashboardController@add_edit_bank');
    // Route::get('/account/profile/switch', 'DashboardController@switch');

    Route::get('/account/settings', 'DashboardController@view_settings');
    Route::post('/account/payment', 'DashboardController@make_payment');  
    Route::middleware('admin')->get('/posts/new', 'DashboardController@new_post');  
    Route::middleware('admin')->post('/posts/new', 'DashboardController@add_new_post');  


    Route::middleware(['promoter'])->group(function () {
        Route::get('/promoter/dashboard', 'PromoterDashboardController@view_dashboard');
        Route::middleware('userchecked')->get('/promoter/tasks', 'PromoterDashboardController@view_tasks');
        Route::get('/promoter/wallet', 'PromoterDashboardController@view_wallet');
        Route::middleware('userchecked')->get('/promoter/referrals', 'PromoterDashboardController@view_referrals');
        Route::middleware('userchecked')->post('/promoter/wallet/withdraw', 'PromoterDashboardController@withdraw');
        Route::get('/account/activate', 'PromoterDashboardController@view_activate');
        Route::get('/promoter/activate/verify', 'PromoterDashboardController@verify_activation');
    });

    Route::middleware(['advertiser'])->group(function () {
        Route::get('/advertiser/dashboard', 'AdvertiserDashboardController@view_dashboard');
        Route::get('/advertiser/campaigns', 'AdvertiserDashboardController@view_campaigns');
        Route::get('/advertiser/wallet', 'AdvertiserDashboardController@view_wallet');
        Route::get('/advertiser/campaigns/new', 'AdvertiserDashboardController@view_new_campaign');
        Route::middleware('userchecked')->post('/advertiser/campaigns/new', 'AdvertiserDashboardController@add_new_campaign');
        Route::get('/advertiser/campaigns/{task_id}/edit', 'AdvertiserDashboardController@view_edit_campaign');
        Route::middleware('userchecked')->post('/advertiser/campaigns/{task_id}/edit', 'AdvertiserDashboardController@add_edit_campaign');
        Route::get('/advertiser/campaigns/{task_id}/disable', 'AdvertiserDashboardController@disable_campaign');
        Route::get('/advertiser/campaigns/{task_id}/enable', 'AdvertiserDashboardController@enable_campaign');
        Route::post('/advertiser/wallet/fund', 'AdvertiserDashboardController@fund');
        Route::get('/advertiser/wallet/fund/verify', 'AdvertiserDashboardController@verify_fund');

    });
});


Route::get('/posts', 'GuestController@index');
Route::get('/posts/{post_id}/{promoter_id?}', "GuestController@viewpost");

Route::get('/faker', function () {
    // factory(App\User::class, 10)->create();
    // factory(App\Task::class, 50)->create();
    // factory(App\View::class, 100)->create();
    // factory(App\Earning::class, 100)->create();
    // factory(App\Lead::class, 100)->create();
    // factory(App\Deposit::class, 100)->create();
    // factory(App\Referral::class, 1)->create();
    // factory(App\Post::class, 20)->create();
    
});

// Referral Route
Route::get('/register/{id}', function($user_id) {
    Session::put('referral_id', $user_id);
    return view('auth.register');
});
