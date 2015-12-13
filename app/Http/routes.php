<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {   return view('welcome'); });
Route::get('home', function () {   return view('library.index'); });
Route::get('biblioteca', function () {   return view('library.index'); });

Route::controller('library', 'libraryController');
Route::controller('biblioteca/generos', 'GenerosController');
Route::controller('biblioteca/clientes', 'ClientesController');
Route::controller('biblioteca/series', 'SeriesController');
Route::controller('biblioteca/editoras', 'EditorasController');
Route::controller('biblioteca/funcionarios', 'FuncionariosController');


//Route::get('employee', 			'employeeController@index');
//Route::controller('users', 'usersController');
//Route::get('users', 'usersController@index');
//Route::get('users/add', 'usersController@create');
//Route::post('users/add', 'usersController@storage');