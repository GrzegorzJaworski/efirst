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
Route::get('/', 'UsersController@index')->name('users');
Route::get('/{user}', 'UsersController@show')->name('user.show');
Route::post('/sms', 'SmsController@store')->name('sms.send');
