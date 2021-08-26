<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/checkauthuser', 'DashboardController@checkuser');
Route::middleware(['auth', 'verified'])->get('/account/banned', function () {
    if (auth()->user()->banned()) {
        return view('auth.banned');
    }else {
        return redirect('/');
    }
    
});

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/viewcampaign/{task_id}/{promoter_id?}', "GuestController@viewpost");

Route::middleware(['auth', 'verified', 'userchecked'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/account/profile', 'DashboardController@view_profile');
    Route::get('/account/profile/new_bank', 'DashboardController@view_new_bank');
    Route::post('/account/profile/new_bank', 'DashboardController@add_new_bank');
    Route::get('/account/profile/edit_bank', 'DashboardController@view_edit_bank');
    Route::post('/account/profile/edit_bank', 'DashboardController@add_edit_bank');
    Route::get('/account/profile/switch', 'DashboardController@switch');

    Route::get('/account/settings', 'DashboardController@view_settings');    


    Route::middleware(['promoter'])->group(function () {
        Route::get('/promoter/dashboard', 'PromoterDashboardController@view_dashboard');
        Route::get('/promoter/tasks', 'PromoterDashboardController@view_tasks');
        Route::get('/promoter/wallet', 'PromoterDashboardController@view_wallet');
        Route::get('/account/referrals', 'PromoterDashboardController@view_referrals');
        
    });

    Route::middleware(['advertiser'])->group(function () {
        Route::get('/advertiser/dashboard', 'AdvertiserDashboardController@view_dashboard');
        Route::get('/advertiser/campaigns', 'AdvertiserDashboardController@view_campaigns');
        Route::get('/advertiser/wallet', 'AdvertiserDashboardController@view_wallet');
        Route::get('/advertiser/campaigns/new', 'AdvertiserDashboardController@view_new_campaign');
        Route::post('/advertiser/campaigns/new', 'AdvertiserDashboardController@add_new_campaign');
        Route::get('/advertiser/campaigns/{task_id}/edit', 'AdvertiserDashboardController@view_edit_campaign');
        Route::post('/advertiser/campaigns/{task_id}/edit', 'AdvertiserDashboardController@add_edit_campaign');
        Route::get('/advertiser/campaigns/{task_id}/disable', 'AdvertiserDashboardController@disable_campaign');
        Route::get('/advertiser/campaigns/{task_id}/enable', 'AdvertiserDashboardController@enable_campaign');
        
    });
});


Route::get('/faker', function () {
    // factory(App\User::class, 10)->create();
    // factory(App\Task::class, 50)->create();
    // factory(App\View::class, 100)->create();
    // factory(App\Earning::class, 100)->create();
    // factory(App\Lead::class, 100)->create();
    // factory(App\Deposit::class, 100)->create();
    // factory(App\Referral::class, 1)->create();
    
});

// Referral Route
Route::get('/{id?}', 'GuestController@index')->name('index');
