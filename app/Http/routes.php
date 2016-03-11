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

Route::group(['middleware' => ['web']], function () {

  Route::get('/', 'HotelsController@index');

  Route::get('/hotel/add', 'HotelsController@showForm');
  Route::post('/hotel/add', 'HotelsController@store');
  
  Route::get('/{hotel}', 'HotelsController@show')->where('hotel','[0-9]+');

  Route::get('rooms/{room}/edit', 'RoomsController@edit');
  Route::delete('rooms/{room}', 'RoomsController@delete');
  Route::patch('rooms/{room}', 'RoomsController@update');

  Route::get('/rooms/new', 'RoomsController@showForm');
  Route::post('/rooms/new', 'RoomsController@store');
});
