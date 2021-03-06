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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function(){
	return 'Home';
});

Route::get('/usuarios', function(){
	return 'Usuarios';
});

Route::get('/usuarios/{id}', function($id){
	return "Mostrando el detalle del usuario: {$id}";
})->where('id', '[0-9]+');

Route:: get('/usuarios/nuevo', function(){
	return "Crear nuevo usuario";
});

Route::get('/saludos/{name}/{nickname?}', function($name, $nickname = null){
	if($nickname){
		return "Bienvenido {$name}, tu apodo es {$nickname}";
	}else{
		return "Bienvenido {$name}, no tienes apodo";
	}	
});
