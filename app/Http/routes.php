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

Route::get('/', function () {   return view('library.index'); });

Route::get('home', 				'libraryController@index');
Route::get('funcionarios', 		'employeeController@index');
Route::get('employee', 			'employeeController@index');
//Route::controller('users', 'usersController');
//Route::get('users', 'usersController@index');
//Route::get('users/add', 'usersController@create');
//Route::post('users/add', 'usersController@storage');