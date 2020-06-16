<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function (){//rutas autenticadas

    //Route::view('/marcas', 'marcas.index')->name('marcas.index');

});

Route::view('/marcas', 'marcas.index')->name('marcas.index');

Route::get('/datos','HomeController@datos')->name('datos');
