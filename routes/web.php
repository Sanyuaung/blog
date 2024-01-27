<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index');

//auth route
Route::get('/login', 'AuthController@showLogin');
Route::get('/register', 'AuthController@showRegister');

//Admin Route
Route::get('/admin/login', 'Admin\AuthController@showLogin');
Route::post('/admin/login', 'Admin\AuthController@Login');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'RedirectIfNotAdmin'], function () {
    Route::get('/', 'PageController@dashboard');
    Route::resource('/programming', 'ProgrammingController');
    Route::resource('/tag', 'TagController');
    Route::resource('/article', 'ArticleController');
    Route::get('/logout', 'AuthController@logout');
});