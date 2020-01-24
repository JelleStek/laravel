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

Route::get('/', 'HomeController@showHome')->name('home');
Route::get('/producten', 'ProductController@showProducts')->name('producten');
Route::get('/producten/add', 'ProductController@create')->name('product.add');
Route::post('/producten/add', 'ProductController@store')->name('product.store');
Route::get('/producten/1', 'ProductController@product1')->name('dior');
