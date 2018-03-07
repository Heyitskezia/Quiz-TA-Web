<!-- NOT FINISHED-->

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

Route::get('/', function () {
   return 'Welcome!';
});

Route::get('categories', 'CategoriesController@Index');
route::get('categories/show', 'CategoriesController@show') 
route::post('categories/add', 'CategoriesController@add') 	
route::put('categories/update', 'CategoriesController@update') 
route::delete('categories/delete', 'CategoriesController@destroy') 


Route::get('items', 'ItemsController@Index');
route::get('items/show', 'ItemsController@show') 
route::post('items/add', 'ItemsController@add') 	
route::put('items/update', 'ItemsController@update') 
route::delete('items/delete', 'ItemsController@destroy') 


?>
