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

/**
 * Rutas de la Seccion Postulantes
 */
Route::get('postulantes', 'PostulantesController@index');

Route::get('postulantes/panel', function(){
    echo "Hola Postulante este es tu Panel";
});

Route::get('postulantes/busquedas', function(){
    echo "Hola Postulante estas son las busquedas Publicadas";
});

Route::get('postulantes/micv', function(){
    echo "Hola Postulante este es tu CV";
});

Route::get('postulantes/reglamentaciones', function(){
    echo "HOLA REGLAMENTACIONES";
});