<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
	'as' => 'home',
	'uses' => 'PagesController@home'
	]);


Route::group(['middleware' => ['web']],function(){
	Route::get('/login', ['as' => 'login', 'uses' => 'AuthController@login']);
	Route::post('/handleLogin', ['as' => 'handleLogin', 'uses' => 'AuthController@handleLogin']);
	Route::get('/profile', ['middleware' => 'auth', 'as' => 'profile', 'uses' => 'UsersController@profile']);
	Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);
	Route::get('/register', ['as' => 'register', 'uses' => 'PagesController@register']);
	Route::resource('users','UsersController', ['only' => ['create','store']]);
});