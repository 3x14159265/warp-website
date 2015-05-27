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

Route::get('/', 'HomeController@index');
Route::get('/docs/getting-started', function() { return view('getting-started'); });
Route::get('/docs/localhost', function() { return view('localhost'); });
Route::get('/docs/ubuntu', function() { return view('ubuntu'); });
Route::get('/docs/authorization', function() { return view('authorization'); });
Route::get('/sdk/chrome', function() { return view('chrome'); });
Route::get('/sdk/javascript', function() { return view('javascript'); });
