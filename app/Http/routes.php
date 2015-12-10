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
Route::controller('biblioteca/clientes', 'clientesController');
Route::controller('biblioteca/editoras', 'editorasController');
Route::controller('biblioteca/funcionarios', 'funcionariosController');
Route::controller('biblioteca/generos', 'generosController');
Route::controller('biblioteca/series', 'seriesController');
