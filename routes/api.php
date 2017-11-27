<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->group(function(){
    Route::get('brands', 'BrandsController@getBrands')->name('ajax-brands');

    Route::get('models/{brandId}', 'ModelsController@getModels')->name('ajax-models');

    Route::get('sales/summary', 'SalesController@getSummaryData')->name('ajax-sales-summary');

    Route::post('sales', 'SalesController@store')->name('ajax-sales');
});