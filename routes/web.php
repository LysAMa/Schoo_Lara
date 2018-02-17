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
	'as' => 'index',
	'uses' => 'PagesController@index']);

Auth::routes();

Route::get('/home', [
	'as' => 'home',
	'uses' => 'HomeController@home']);
Route::get('/profile', 'DashboardController@userProfile');
Route::get('/projects', 'DashboardController@projects');
Route::get('/investigations', 'DashboardController@investigations');

