<?php

use Illuminate\Support\Facades\Route;

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
    return redirect('login');
});


Auth::routes();
// home画面
Route::get('/home', 'HomeController@index')->name('home');

/**
 * チャット
 */
Route::prefix('chat')->group(function () {

  Route::get('/', 'ChatController@index')->name('/');
});

Route::prefix('chat_create')->group(function () {
  Route::post('create', 'ChatCreateController@create')->name('create');
  Route::get('ajax_get_data', 'ChatCreateController@ajaxGetData')->name('ajax_get_data');
  Route::get('/', 'ChatCreateController@index')->name('/');
});

/**
 * ユーザー一覧
 */
Route::prefix('user')->group(function () {
  Route::get('create', 'UserController@create')->name('user.create');
  Route::get('edit/{id}', 'UserController@edit')->name('user.edit');
  Route::post('comp', 'UserController@comp')->name('user.comp');
  Route::get('/', 'UserController@index')->name('user');
});
