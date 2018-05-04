<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => '/admin', 'namespace' => 'Admin'], function () {
    Route::get('/login', 'UserController@login');
    Route::post('/login', 'UserController@saveLogin');
    Route::get('/index', 'UserController@index');
    Route::get('/logout', 'UserController@logout');
    Route::get('/change-password', 'UserController@changePassword');
    Route::get('/detail', 'UserController@detail');
});

Route::get('/', function () {
    return view('welcome');
});
