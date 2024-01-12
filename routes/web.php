<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'Admin\PageController@index');

//Admin Route
Route::get('/admin/login', 'Admin\AuthController@showLogin');
Route::post('/admin/login', 'Admin\AuthController@Login');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin'], function () {
});