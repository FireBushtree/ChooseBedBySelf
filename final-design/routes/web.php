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

Route::group(['prefix' => '/admin', 'namespace' => 'Backend', 'name' => 'admin.'], function () {

    Route::get('/login', 'UserController@login')->name('test');
    Route::post('/login', 'UserController@saveLogin');
    Route::get('/index', 'UserController@index');
    Route::get('/logout', 'UserController@logout');
    Route::get('/change-password', 'UserController@changePassword');
    Route::post('/change-password', 'UserController@saveChangePassword');
    Route::get('/detail', 'UserController@detail');
    Route::post('/detail', 'UserController@saveDetail');

    Route::get('/school', 'SchoolController@index');
    Route::put('/school', 'SchoolController@edit');

    Route::resource('/notice', 'NoticeController');

    Route::resource('/campus', 'CampusController');

    Route::resource('/apartment', 'ApartmentController');

    Route::get('/room/auto-add', 'RoomController@showAutoAdd');
    Route::post('/room/auto-add', 'RoomController@autoAdd');
    Route::resource('/room', 'RoomController');

    Route::get('/api/apartment/{id}', 'ApiController@getApartmentById');
    Route::get('/api/apartments', 'ApiController@getApartments');
    Route::get('/api/apartment/{id}/rooms', 'ApiController@getRooms');
});

Route::get('/', function () {
    return view('welcome');
});
