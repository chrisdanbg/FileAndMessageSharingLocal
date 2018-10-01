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

Route::get('/', [
  'uses' => 'FileuploadController@index',
  'as' => 'index'
]);

Route::post('store', [
  'uses' => 'FileuploadController@store',
  'as' => 'store'
]);



Route::post('/post', [
  'uses' => 'MessageController@store',
  'as' => 'message.store'
]);

Route::get('/delete/{id}', [
  'uses' => 'MessageController@destroy',
  'as' => 'message.delete'
]);
