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


Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', 'DashboardController@index');
    Route::get('/account/referrals', 'DashboardController@view_referrals');
    Route::get('/account/profile', 'DashboardController@view_profile');
    Route::get('/account/settings', 'DashboardController@view_settings');

    Route::middleware(['promoter'])->group(function () {
        Route::get('/promoter/dashboard', 'PromoterDashboardController@view_dashboard');
        Route::get('/promoter/tasks', 'PromoterDashboardController@view_tasks');
        Route::get('/promoter/wallet', 'PromoterDashboardController@view_wallet');
        
    });

    Route::middleware(['advertiser'])->group(function () {
        Route::get('/advertiser/dashboard', 'AdvertiserDashboardController@view_dashboard');
        Route::get('/advertiser/campaigns', 'AdvertiserDashboardController@view_campaigns');
        Route::get('/advertiser/wallet', 'AdvertiserDashboardController@view_wallet');
        
    });
});
