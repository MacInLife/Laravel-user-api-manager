<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Affiche tous les users
Route::resource('/users', 'ApiController');

//Route api pour le update et crete et delete via Postman
Route::middleware('api')->post('/user-add', 'ApiController@create');
Route::middleware('api')->post('/user-update/{id}', 'ApiController@update');
Route::middleware('api')->post('/user-destroy/{id}', 'ApiController@destroy');
