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

//URL pour chaque page et ce qu'il retourne
// Route::get('1', function() { return 'Je suis la page 1 !'; });
// Route::get('2', function() { return 'Je suis la page 2 !'; });
// Route::get('3', function() { return 'Je suis la page 3 !'; });

//Comportement identifque au page 1 à 3
Route::get('{n}', function($n) { 
    return response('Je suis la page ' . $n . ' !', 200);
})->where('n', '[1-3]');

//Route qui accepte n'importe qu'elle URL
// Route::get('{n}', function($n) {
// 	return 'Je suis la page ' . $n . ' !'; 
// });

//Accès à la page d'accueil et ce qu'il retourne
// Route::get('/', ['as' => 'home', function()
// {
//   return 'Je suis la page d\'accueil !';
// }]);

//Appel de la page vue
// Route::get('/', function()
// {
//     return view('vue');
// });

//Appel de la page article partie fixe et partie variable "n"
// Route::get('article/{n}', function($n) { 
// return view('article')->withNumero($n);
// })->where('n', '[0-9]+');

//Appel de la page factures
// Route::get('facture/{n}', function($n) { 
//     //renvoie la vue 'facture' avec le numéro
//     return view('facture')->withNumero($n); 
//     //redirige sur l'url facture
//     //return redirect('facture');
//     //redirige sur la route nomméefacture.
//     //return redirect()->route('facture');
// })->where('n', '[0-9]+');

//Accès page index avec espace de nom "Home"
// Route::get('/', ['uses' => 'WelcomeController@index', 'as' => 'home']);

// //Accès a la page article fixe et n numéro variable
// Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

// Route::get('users', 'UsersController@getInfos');
// Route::post('users', 'UsersController@postInfos');

// Route::get('contact', 'ContactController@getForm');
// Route::post('contact', 'ContactController@postForm');


// Route::get('photo', 'PhotoController@getForm');
// Route::post('photo', 'PhotoController@postForm');

// Route::get('email', 'EmailController@getForm');
// Route::post('email', ['uses' => 'EmailController@postForm', 'as' => 'storeEmail']);

//Accès page index
Route::get('users' , 'UserController@index');
Route::resource('user', 'UserController');
