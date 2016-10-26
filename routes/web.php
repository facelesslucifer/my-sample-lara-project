<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('test', [
    'middleware' => ['auth', 'admin'],
    'uses' => 'TestController@index'
]);

// Auth routes
// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\AuthController@showLoginForm')->name('login');
Route::post('login', 'Auth\AuthController@login');
Route::post('logout', 'Auth\AuthController@logout');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

// Registration Routes...
Route::get('register', 'Auth\AuthController@showRegistrationForm');
Route::post('register', 'Auth\AuthController@register');

// home page route
Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index',]);

// Widget routes
Route::get('widget/create', ['as' => 'widget.create', 'uses' => 'WidgetController@create']);
Route::get('widget/{id}-{slug?}', ['as' => 'widget.show', 'uses' => 'WidgetController@show']);
Route::resource('widget', 'WidgetController', ['except' => ['show', 'create']]);

// Terms of Service
Route::get('terms-of-service', 'PagesController@terms');

// Privacy
Route::get('privacy', 'PagesController@privacy');

// Admin routes
Route::get('admin', ['as' => 'admin', 'uses' => 'AdminController@index',]);

// Socialite routes
Route::get('auth/{provider}', 'Auth\AuthController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\AuthController@handleProviderCallback');

// Profile routes
Route::get('show-profile', ['as' => 'show-profile', 'uses' => 'ProfileController@showProfileToUser']);
Route::get('my-profile', ['as' => 'my-profile', 'uses' => 'ProfileController@myProfile']);
Route::resource('profile', 'ProfileController');

// User routes
Route::resource('user', 'UserController');

// Settings routes
Route::get('settings', 'SettingsController@edit');
Route::post('settings', ['as' => 'userUpdate' , 'uses' => 'SettingsController@update']);

// Image routes
Route::resource('marketing-image', 'MarketingImageController');

// Api widget routes
Route::get('api/widget-data', 'ApiController@widgetData');