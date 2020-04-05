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
    return view('login');
});

Auth::routes();
// home画面
Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('chat')->group(function () {

  Route::get('/', 'ChatController@index')->name('/');
});

Route::prefix('chat_create')->group(function () {
  Route::post('create', 'ChatCreateController@create')->name('create');
  Route::get('/', 'ChatCreateController@index')->name('/');
});
