<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index');

//auth route
Route::get('/login', 'AuthController@showLogin');
Route::post('/login', 'AuthController@Login');
Route::get('/register', 'AuthController@showRegister');
Route::post('/register', 'AuthController@Register');
Route::get('/logout', 'AuthController@Logout');

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