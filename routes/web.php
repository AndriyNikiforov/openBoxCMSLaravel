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

Route::get('/', 'AuthController@loginPage');

Route::prefix('page')->group(function() {
    Route::get('welcome', function() {
        return view('welcome');
    })->name('welcome');
    Route::get('login', 'AuthController@loginPage')->name('login-page');
    Route::get('register', 'AuthController@registerPage')->name('register-page');
});

Route::prefix('auth')->group(function() {
    Route::get('logout', 'AuthController@logout')->name('logout');
    Route::post('login', 'AuthController@login')->name('login');
    Route::post('register', 'AuthController@register')->name('register');
});
