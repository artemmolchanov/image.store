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



Route::get('/', 'ImageController@index')->name('home');

Route::get('/images/create', 'ImageController@create');

Route::post('/images', 'ImageController@store');

Route::get('/images/{image}', 'ImageController@show');

Route::post('/images/tag', 'TagsController@store');