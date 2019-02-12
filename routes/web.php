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

Route::get('/',[
  'as' => 'home',
  'uses' => 'HomeController@index'
]);


Route::bind('product', function($name){
  return App\Product::where('name',$name)->first();
});


Route::get('product/{name}',[
  'as' => 'product-detail',
  'uses' => 'CartController@show'
]);

//Carrito

Route::get('cart/show',[
  'as' => 'cart-show',
  'uses' => 'CartController@show'
]);



Route::get('cart/add/{product}',[
  'as' => 'cart-add',
  'uses' => 'CartController@add'
]);


Route::get('cart/delete/{product}',[
  'as' => 'cart-delete',
  'uses' => 'CartController@delete'
]);

Route::get('cart/trash',[
  'as' => 'cart-trash',
  'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity?}',[
  'as' => 'cart-update',
  'uses' => 'CartController@update'
]);

Route::get('personalizacion','PersonalizacionController@personalizar');

Route::post('personalizacion','PersonalizacionController@guardarpersonalizacion');

Route::get('idioma','IdiomaController@idioma');

Route::post('idioma','IdiomaController@guardaIdioma');
//Auth::routes();
