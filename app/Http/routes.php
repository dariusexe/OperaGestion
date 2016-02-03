<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/







/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/



Route::group(['middleware' => 'web'], function () {


Route::auth();
Route::get('users', 'UserController@index');
Route::get('userCreate', 'UserController@create');
Route::post('userCreate', 'UserController@store');
Route::get('userDelete/{email}', ['as' => 'delete', 'uses' => 'UserController@destroy']);
Route::get('userEdit/{id}', ['as' => 'edit', 'uses' => 'UserController@edit']);
Route::post('userEdit/{id}', ['as' => 'update', 'uses' => 'UserController@update']);

Route::get('/', 'LoginController@index');

Route::get("home", 'HomeController@index');

Route::get('/charts', function()
{
	return View::make('mcharts');
});

Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});


Route::get('/documentation', function()
{
	return View::make('documentation');
});
Route::get('test', 'UserController@test');
});
