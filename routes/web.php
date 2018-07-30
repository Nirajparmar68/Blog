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

Route::get('test', 'TestController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('articles','ArticleController');
//Route::get('articles', 'ArticleController@index');
//Route::get('articles/create', 'ArticleController@create');
//Route::post('articles', 'ArticleController@store');
//Route::get('articles/{id}/edit', 'ArticleController@edit');
//Route::patch('articles/{id}','ArticleController@update');