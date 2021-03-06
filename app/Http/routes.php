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

Route::get('/', 'UserController@index');
Route::get('/home', 'UserController@index');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['prefix' => 'api'], function () {
    Route::post('auth/login', 'Auth\AuthController@tokenLogin');
    Route::get('auth/logout', 'Auth\AuthController@tokenLogout');
    Route::post('auth/register', 'Auth\AuthController@tokenRegister');
});
Route::group(['prefix' => 'api', 'middleware' => ['jwt.auth', 'jwt.refresh']], function () {
    Route::get('myprofile', 'UserController@showUserByToken');
});
