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
Auth::routes();
Route::get('/top', 'TopController@inicio');

Route::group(['middleware' => ['auth']], function() { // Controla que estes conectado para poder ver las vistas

// Route::get('/', function () {return redirect('/inicio');});
Route::get('/bienvenida', 'BienvenidosController@inicio');
//Route::get('/home', 'HomeController@index');

Route::get('/irPais/{id}', 'GeneralController@irPais');
Route::get('/mapa', 'GeneralController@mapa');
Route::get('/investigar', 'GeneralController@pistas');
Route::get('/ver', 'GeneralController@ver');

Route::get('/criminalcapturado', 'MisionController@criminal');
Route::get('/jefecapturado', 'MisionController@jefe');

});

Route::get('/', 'GeneralController@inicio');
Route::get('/comenzar', 'MisionController@inicio');

/* Para armar una ruta pones:

Route::get('/pedidoget', function () {return view('welcome');});)

donde /pedidoget es lo que el usuario pone en la barra de direcciones y welcome es le nombre de la vista