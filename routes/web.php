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

Route::group(['middleware' => ['isOn']], function() { // A traves de este middleware reviso si hay un usuario conectado, sino lo envio al login
    Route::get('/', function () { return view('welcome'); });
});

Auth::routes();

Route::get('/bienvenido', function(){
    return view ('bienvenidos');
});
