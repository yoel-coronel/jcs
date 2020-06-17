<?php

use Illuminate\Support\Facades\Route;


/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/inicio', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function (){//rutas autenticadas

    //Route::view('/marcas', 'marcas.index')->name('marcas.index');

});

Route::view('/marcas', 'marcas.index')->name('marcas.index');

Route::get('/datos','HomeController@datos')->name('datos');



Route::fallback(function () {
    return redirect('/inicio');
});
