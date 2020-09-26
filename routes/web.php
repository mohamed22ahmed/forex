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
Route::get('/','websiteController@index');
Route::get('/contact','websiteController@contact');
Route::post('/contact','websiteController@send_message');

Route::get('/mood/{mood}','websiteController@mood');
Route::get('/lang/{lang}', 'websiteController@lang');


