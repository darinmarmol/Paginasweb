<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|get, post, put, delete
*/
/*
Route::resource('Multi','rutanueva');
Route::get('rutaejemplo', function(){
	return "esto es una prueba en laravel";
});
/*
Route::get('usuario', function(){
	return "usuario"
});*/
/*
Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/','page_controler@index');
Route::get('ingresar','page_controler@ingresar');
Route::get('mostrar','page_controler@mostrar');
Route::get('mostrar','frontcontroller@vista');

Route::group(['prefix'=>'usuarios'], function(){ 
	Route::get('vista/{id}',[
		'uses'=>'page_controler@vista',
		'as'=>'usuariosvista']);
});

Route::group(['prefix'=>'empleados'], function(){ 
	Route::get('vistaempleados/{id}',[
		'uses'=>'page_controler@vistaempleados',
		'as'=>'empleadosvista']);
});