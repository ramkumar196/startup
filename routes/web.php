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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/product', 'ProductController@index')->name('product');
Route::post('/product/store', 'ProductController@store')->name('product_store');
Route::get('/product/manage', 'ProductController@manage')->name('product_manage');
Route::get('/product/edit/{id}', 'ProductController@edit')->name('product_edit');
