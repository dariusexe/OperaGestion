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

Route::post('products/company/create', 'ProductController@companyStore');
Route::post('products/class/create', 'ProductController@classStore');
Route::get('products/company/create', 'ProductController@companyCreate');
    Route::get('products/class/create', 'ProductController@classCreate');

Route::get('products/class', ['as' => 'ProductClass', 'uses' =>'ProductController@classIndex']);
Route::get('products/company', ['as' => 'ProductCompany', 'uses' =>'ProductController@companyIndex']);
Route::delete('products/class/{id}', 'ProductController@classDestroy');
Route::delete('products/company/{id}', 'ProductController@companyDestroy');



Route::resource('products', 'ProductController');


    Route::get('Contract', function(){
        return View::make('building');
    });

    Route::get('presupuesto', function(){
        return View::make('building');
    });

    

    
    
    
    
    
Route::get('/', 'LoginController@index');

Route::get("home", 'HomeController@index');

Route::get('test', 'ProductController@test');
});
