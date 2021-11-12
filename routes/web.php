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
Route::get('/configuracion', 'Configuration@index');
Route::post('/configuracion', 'Configuration@postconfig');

Route::get('/reservacion', 'ReservationController@index');
Route::post('/inforeserva/{id}', 'ReservationController@showreserva')->name('showreserva');
Route::get('/registrarcliente', 'ClienteController@index');
Route::post('/registrarcliente', 'ClienteController@storeclient')->name('storeclient');

Route::group(['middleware' => 'auth','namespace' => 'rooms'], function() {
    Route::get('/habitacionesdisponibles', 'roomavailable@index');
    Route::get('/habitaciones', 'rooms@index');
    Route::get('/editarhabitacion/{id}', 'rooms@editroom');
    Route::post('/editarhabitacion/{id}', 'rooms@updateroom');
    Route::get('/habitacionesocupadas', 'roombusy@index');
    Route::get('/habitacionesreservadas', 'roomreserved@index');
    Route::get('/habitacionesenmantenimiento', 'roommaintenance@index');
});

Route::group(['middleware' => 'auth','namespace' => 'administracion'], function() {
    Route::get('/usuarios', 'CreateEmployee@index');
    Route::get('/editarusuario/{id}', 'CreateEmployee@editusuario');
    Route::post('/editarusuario/{id}', 'CreateEmployee@updateusuario');

    Route::get('/crearusuario', 'CreateEmployee@createusuario');
    Route::post('/crearusuario', 'CreateEmployee@storeusuario');
    
});