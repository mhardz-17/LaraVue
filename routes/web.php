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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' =>'projects'], function(){
    Route::get('/', 'ProjectController@index');
    Route::get('/list', 'ProjectController@getList');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
