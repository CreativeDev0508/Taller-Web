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
Route::get('/', 'GeneralController@inicio'); // Vista de inicio con las opciones de Comenzar, Registrarse y Ranking

Route::get('/top', 'TopController@inicio');

Route::group(['middleware' => ['auth']], function() { // Controla que estes conectado para poder ver las vistas

    Route::get('/comenzar', 'MisionController@inicio'); // Lo lleva a la vista de comienzo de la mision
    // Route::get('/irPaisF/{id}', 'GeneralController@irPaisF');
    Route::get('/irPais/{id}', 'GeneralController@irPais');
    Route::get('/mapa', 'GeneralController@mapa');
    Route::get('/investigar', 'GeneralController@pistas');
    Route::get('/ver/{id}', 'GeneralController@ver');

    Route::get('/asignarPais', 'MisionController@asignar'); // Le asigna el id a la session
    Route::get('/criminalcapturado', 'MisionController@criminal');
    Route::get('/orden', 'MisionController@orden');
    Route::get('/jefecapturado', 'MisionController@jefe');

});

