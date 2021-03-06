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
    return view('main/main');
});

Route::get('user/list', 'User\UserController@index')->middleware('auth');

Route::get('users/add', 'User\UserController@insertNew')->name('user.insertNew')->middleware('auth');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('user/account', 'User\UserController@updateForm')->name('user.update.form')->middleware('auth');
Route::post('user/update', 'User\UserController@update')->name('user.update')->middleware('auth');
