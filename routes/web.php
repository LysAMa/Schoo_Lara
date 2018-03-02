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
	
Route::get('/confirm/{id}/{token}', 'Auth\RegisterController@confirm');


Route::group(['middleware' => 'prevent-back-history'],function(){
	Auth::routes();
	Route::get('/home', [
	'as' => 'home',
	'uses' => 'DashboardController@home']);

	Route::resource('/profile', 'ProfileController');
	Route::resource('/projects', 'ProjectsController');
	Route::resource('/investigations', 'InvestigationsControllers');
	Route::get('/inbox', 'DashboardController@inbox');
});