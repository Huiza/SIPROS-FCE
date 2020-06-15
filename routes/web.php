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
Route::get('/mi_primer_ruta',function(){
	return 'Hola mundo';
});
//Rutas con parametros
Route::get('/name/{name}/lastname/{lastname?}',function($name,$lastname=null){
	return 'Hola soy'.$name .$lastname;
});
//Route::get('habitacion/{param}','OtroController@prueba');forma manual controller


Route::post('instituciones/{institucion}/proyectos','ProyectoController@store');
Route::resource('habitacion','HabitacionController');//forma resorce
Route::resource('kardex','kardexController');
Route::resource('instituciones','InstitucionController');
Route::resource('proyectos','ProyectoController');

