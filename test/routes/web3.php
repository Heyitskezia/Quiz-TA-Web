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
|
|Latihan yg sebelumnya

*/

Route::get('/', function () {
   return 'Welcome!';
});

route::get('categories/show', 'ItemsController@show') 
route::post('ctegories/add', 'ItemsController@add') 	
route::put('categories/update', 'ItemsController@update') 
route::delete('categories/delete', 'ItemsController@destroy') 




//Route::get('cards', 'CardsController@Index');

//Route::get('cards/create', 'CardsController@Create'); -> create card
//Route::post('cards/1', 'CardsController@show'); -> show specific card
//Route::put('cards/1', 'CardsController@update'); -> update specific card
//Route::delete('cards/1', 'CardsController@destroy'); -> delete specific card




//Route::get('/', function() {
//	$people = ['JM', 'YG', "KB"];
//	return view('welcome', compact('people'));
//})

//Route::get('/about', function () {
//return view('about');
//});

//Route::get('/register', function () {
//return view('register');
//});

//Route::post('/register', 'teamController@add');

?>
