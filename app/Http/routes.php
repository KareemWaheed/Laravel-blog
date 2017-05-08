<?php

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::resource('articles', 'ArticlesController');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('foo', ['middleware'=>'manager', function(){
    return 'This is Manager View';
}]);
