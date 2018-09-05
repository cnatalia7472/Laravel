<?php

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

Route::get('/', function () {
    return view('frontend.index');
});

// Auth Routes
Route::group([], function () {
    Auth::routes();
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::view('forgot-password', 'auth.passwords.email')->name('forgot-password');
    Route::get('lookup', 'Auth\LoginController@showLookupForm')->name('lookup');
    Route::post('lookup', 'Auth\LoginController@LookupSubdomain');
});

Route::domain('www.revohub.com')->group(function () {
    return view('frontend.index');
});

Route::view('/', 'frontend.index')->name('home');
Route::view('contact-us', 'frontend.contact-us')->name('contact-us');



Route::get('test', 'TestController@testDNS')->name('test');

// Test Routes
Route::view('/reset', 'auth.passwords.reset')->name('reset');
Route::view('/profile', 'tenant.user.profile')->name('profile');
Route::view('/note', 'tenant.test.summernote')->name('note');


// Auth required routes
Route::group(['middleware' => ['auth']], function() {
    // Top level dashboard routes
    Route::view('change-log', 'change-log')->name('change-log');
    Route::view('feedback', 'feedback')->name('feedback');
    Route::view('privacy-policy', 'privacy-policy')->name('privacy-policy');
    Route::view('tos', 'tos')->name('tos');
    Route::view('status', 'status')->name('status');
    Route::view('support', 'support')->name('support');
    Route::view('cookies-policy', 'cookies-policy')->name('cookies-policy');
    Route::view('cookies-explained', 'cookies-explained')->name('cookies-explained');
    Route::view('sponsors', 'sponsors')->name('sponsors');

    Route::get('/dashboard', 'DashboardController@showDashboard')->name('dashboard');
    Route::get('/license', 'LicenseController@showLicense')->name('license');

    // Resource Controllers
    Route::resource('organizations', 'OrganizationController');
    Route::resource('organizations.domains', 'Organization\DomainController');
});

// Global view routes
Route::group(['middleware' => ['auth'], 'prefix' => 'global', 'as' => 'global.'], function () {
    Route::view('/', 'tenant.global_view.index')->name('index');
    Route::get('domains', 'Organization\DomainController@globalview')->name('domains');
    Route::get('contacts', 'Organization\ContactController@globalview')->name('contacts');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::resource('users', 'Admin\UserController');
    Route::resource('roles', 'Admin\RoleController');
    Route::resource('permissions', 'Admin\PermissionController');
});

// System only routes
Route::group(['middleware' => ['auth'], 'prefix' => 'system', 'as' => 'system.'], function () {

});