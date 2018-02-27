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

Route::group(['as' => 'video.', 'namespace' => 'Home'], function (){
    Route::get('/', ['as' => 'index', 'uses' => 'VideoController@index']);
    Route::get('/g/{id}/{page?}', ['as' => 'category', 'uses' => 'VideoController@category']);
    Route::get('/v/{id}/{infoId?}', ['as' => 'info', 'uses' => 'VideoController@info']);
    Route::get('/s/{title?}/{page?}', ['as' => 'search', 'uses' => 'VideoController@search']);
    Route::get('/t/{id}', ['as' => 'getThumb', 'uses' => 'VideoController@getThumb']);
});