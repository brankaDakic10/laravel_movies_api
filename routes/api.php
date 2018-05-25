<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| jwt Routes
|--------------------------------------------------------------------------
|
| Here is where you can register jwt routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "jwt" middleware group. Enjoy building your jwt!
|
*/
///add new public endpoint
Route::post('/login','Auth\LoginController@authenticate');

Route::middleware('jwt')->get('/movies','MoviesController@index');

Route::middleware('jwt')->get('/movies/{id}','MoviesController@show');
Route::middleware('jwt')->post('/movies','MoviesController@store');
Route::middleware('jwt')->put('/movies/{id}','MoviesController@update');
Route::middleware('jwt')->delete('/movies/{id}','MoviesController@destroy');
