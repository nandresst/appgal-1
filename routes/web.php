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

Route::get('/pagina1','PruebaController@CrudPrueba');

Route::post('/pagina1','PruebaController@Guardar')->name('guardar.persona');

/*Escalafon ************************/
Route::get('/tradatos','EscalafonController@VerTrabajador');


/*fin Escalafon ********************/