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

Route::get('panel', function(){
    return View::make('panel');
});

Route::group(['middleware' => 'web'], function () {


Route::auth();

Route::resource('users', 'UserController');

Route::resource('clients', 'ClientController');

Route::resource('products', 'ProductController');




Route::group(['as' => 'products.class.'], function(){
        Route::get('products/class', 'ProductController@indexClass')->name('index');
    Route::get('products/class/create', 'ProductController@createClass')->name('create');
    Route::post('products/class', 'ProductController@storeClass')->name('store');
    Route::get('products/class/{id}', 'ProductController@destroyClass')->name('destroy');
    });


Route::get('/', 'LoginController@index');

Route::get("home", 'HomeController@index');

Route::get('test', 'ProductController@test');
});
