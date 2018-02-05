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

Auth::routes();

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => '/admin'], function() {
    Route::get('/','AdminController@index');
	Route::get('/tovari','AdminController@tovari');
	Route::get('/addtovar','AdminController@addtovar');
	Route::post('/dobavittovar','AdminController@dobavittovar');
	Route::get('/users','AdminController@users');
	Route::get('/orders','AdminController@orders');

});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','ProductController@getProducts')
    ->name('products.list');

Route::get('/{id}','ProductController@getProduct')
    ->name('product.view');

Route::get('/catalog/{id}','ProductController@getCatalog');



