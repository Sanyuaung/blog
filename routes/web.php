<?php

use Illuminate\Support\Facades\Route;

Route::view('/test', 'test');
Route::get('/', 'PageController@index');

//auth route
Route::get('/login', 'AuthController@showLogin');
Route::post('/login', 'AuthController@Login');
Route::get('/register', 'AuthController@showRegister');
Route::post('/register', 'AuthController@Register');
Route::get('/article', 'ArticleController@all');
Route::get('/article/{slug}', 'ArticleController@detail')->name('article.detail');;
Route::group(['middleware' => 'RedirectIfNotAuth'], function () {
    Route::get('/logout', 'AuthController@Logout');
    Route::get('/profile', 'ProfileController@showProfile');
});

//API
Route::group(['prefix' => 'api', 'namespace' => 'Api'], function () {
    Route::post('/article-comment', 'ArticleApi@makeComment');
    Route::post('/article-like', 'ArticleApi@Like');
    Route::post('/article-save', 'ArticleApi@Save');
    Route::get('/article-save', 'ArticleApi@getSave');
    Route::get('/user-info', 'AuthApi@getProfile');
    Route::post('/user-update', 'AuthApi@updateProfile');
});

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