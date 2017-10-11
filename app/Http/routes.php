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

Route::get('/', 'MainController@index');

Route::get('dashboard', 'DashboardController@index');

Route::get('blog', 'PostController@showlist');
Route::get('blog/create', 'PostController@create');
Route::get('blog/{slug}', 'PostController@showsingle');
Route::post('blog', 'PostController@store');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
