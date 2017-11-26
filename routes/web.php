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

Route::get('/', 'HomeController@index');

Route::get('brands', 'BrandsController@getBrands')->name('ajax-brands');

Route::get('models/{brandId}', 'ModelsController@getModels')->name('ajax-models');