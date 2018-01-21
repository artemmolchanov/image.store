<?php

Route::get('/', 'ImageController@index')->name('home');

Route::get('/images/create', 'ImageController@create');

Route::post('/images', 'ImageController@store');

Route::get('/images/{image}', 'ImageController@show');

Route::post('/images/tag', 'TagsController@store');

Route::get('/images/tags/{tag}', 'TagsController@index');

Route::group(['prefix' => 'api'], function ()
{
    Route::get('/tags/{tag}', 'ApiController@getImageByTag');
});
