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

Route::controller('auth', 'Auth\AuthController');
Route::controller('book', 'BookController');
Route::controller('admin', 'AdminController');
Route::controller('category', 'CategoryController');
Route::controller('size', 'SizeController');
Route::controller('color', 'ColorController');
Route::controller('shoe', 'ShoeController');
Route::controller('user', 'UserController');

Route::get('user',['middleware'=>'auth',function() {
    return view('user');
}]);


Route::get('/', 'ShoeController@getIndex');

