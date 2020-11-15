<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'ProductsController@index')->name('products.index');

Route::get('/products', 'ProductsController@index')->name('products.index');
Route::get('/products/annonce', 'ProductsController@Annonce')->name('products.annonce');
Route::get('/products/show/{product}', 'ProductsController@show')->name('products.show');
Route::get('/products/reussite', 'ProductsController@Reussite')->name('products.reussite');
