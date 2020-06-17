<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::middleware(['guest'])->group(function (){

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');


    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');

    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
});

Route::middleware(['auth'])->group(function (){

    Route::get('/inicio', 'HomeController@index')->name('home');


    Route::get('password/confirm', 'Auth\LoginController@Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
    Route::post('password/confirm', 'Auth\LoginController@Auth\ConfirmPasswordController@confirm');

    Route::view('/marcas', 'marcas.index')->name('marcas.index');


    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

});


Route::fallback(function () {
    return redirect('/inicio');
});
