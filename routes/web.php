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

Route::get('/regist', 'PostController@index')->name('index');

Route::post('/confirm', 'PostController@confirm')->name('confirm');

Route::post('/complete', 'PostController@complete')->name('complete');

Route::get('/', 'TopController@top')->name('top');

Route::get('/first_login', 'LoginController@first_login')->name('first_login');

Route::post('/login', 'LoginController@login')->name('login');
Route::get('/reset', 'LoginController@reset')->name('reset_password');
Route::post('/reset/complete', 'LoginController@send')->name('send');
