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
/*-------------------------------------------------FRONT END-------------------------------------------------------------*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('index', ['as' => 'home', 'uses' => 'PageController@getIndex']);

Route::get('catalog', ['as' => 'products', 'uses' => 'PageController@getCatalog']);

Route::get('ceramictiles', ['as' => 'ceramic', 'uses' => 'PageController@getCeramic']);

Route::get('product/{id}', ['as' => 'detailproduct', 'uses' => 'PageController@getDetail']);

/*------------------------------------------------BACK END-------------------------------------------------------------*/

Route::group(['prefix' => 'login'], function () {
	Route::get('/', 'LoginController@getLogin');
	Route::post('/', 'LoginController@postLogin');

});

Route::get('logout', 'HomeController@getLogout');

Route::group(['prefix' => 'admin'], function () {
	Route::get('home', 'HomeController@getHome');

	Route::group(['prefix' => 'category'], function () {
		Route::get('/', 'CategoryController@getCate');
		Route::post('/', 'CategoryController@postCate');
		Route::get('edit/{id}', 'CategoryController@getEditCate');
		Route::post('edit/{id}', 'CategoryController@postEditCate');
		Route::get('delete/{id}', 'CategoryController@getDeleteCate');
	});

	Route::group(['prefix' => 'product'], function () {
		Route::get('/', 'ProdController@getProduct');
		Route::get('add', 'ProdController@getAddProduct');
		Route::post('add', 'ProdController@postAddProduct');
		Route::get('edit/{id}', 'ProdController@getEditProduct');
		Route::post('edit/{id}', 'ProdController@postEditProduct');
		Route::get('delete/{id}', 'ProdController@getDeleteProduct');
	});
});
