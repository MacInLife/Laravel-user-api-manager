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

//Page de base à la construction de l'api
// Route::get('/', function () {
//     return view('welcome');
// });


//Accès page index
Route::get('users' , 'UserController@index');
Route::resource('user', 'UserController');
