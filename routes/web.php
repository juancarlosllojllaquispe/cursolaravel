<?php

use Illuminate\Support\Facades\Route;

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
// rutas raiz 
Route::get('/', function () {
    return view('welcome');
});

// ruta saludo
Route::get('/hola/ruta', function () {
    return 'hola desde web.php';
});


// agrupando rutas
Route::group(['prefix'=>'saludo'],function(){
Route::get('/dia', function () {
    return 'buenos dias';
});

Route::get('/tardes', function () {
    return 'buenos tardes';
});

Route::get('/noches', function () {
    return 'buenos noches';
});

});
//*********************************************************************************** */

Route::get('/prueba', 'PruebaController@index');


// paso de parametros

Route::get('/prueba/{nombre}/{edad}', 'PruebaController@parametrosAction');

// renderizar vista desde un controlador
Route::get('/prueba/vista', 'PruebaController@vistaAction');

// enviar datos del controlador hacia la vista

Route::get('/prueba/datos/{nombre}/{edad}', 'PruebaController@datosAction');
