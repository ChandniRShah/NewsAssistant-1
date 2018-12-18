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
    return view('welcome');
});

Route::get('newsCategory', function () {
    return view('newsCategory');
})->name('newsCategory');

Route::get('sports', function () {
    return view('sports');
})->name('sports');

Route::get('entertainment', function () {
    return view('entertainment');
})->name('entertainment');

Route::get('technology', function () {
    return view('technology');
})->name('technology');

Route::get('fashion', function () {
    return view('fashion');
})->name('fashion');


//Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
// Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('login', 'Auth\LoginController@login');
// Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');
// Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
// Route::post('register', 'Auth\RegisterController@register');
// Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
// Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
// Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Auth::routes();


Route::group(['middleware' => 'auth'], function(){
    //All the routes that require logging in
    Route::get('/home', 'HomeController@index')->name('home');
});




