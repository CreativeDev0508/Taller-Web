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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/inicio', 'GeneralController@inicio');
Route::get('/mapa', 'GeneralController@mapa');
Route::get('/investigar', 'GeneralController@pistas');

Route::get('/top', 'TopController@inicio');


Route::get('/criminalcapturado', 'MisionController@criminal');
Route::get('/jefecapturado', 'MisionController@jefe');
