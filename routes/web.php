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

Route::group(['prefix'=>'/'], function() {
    Route::get('/', ['as' => 'getHome', 'uses' => 'HomeCouponController@getHome']);
    Route::get('/detail/{store}', ['as' => 'getDetail', 'uses' => 'HomeCouponController@getDetail']);
    Route::get('/go', ['as' => 'redirect', 'uses' => 'GoController@redirect']);
});



