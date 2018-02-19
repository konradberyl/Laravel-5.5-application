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

Route::get('users', 'User\UserController@index')->middleware('auth');

Route::get('users/details/{id}', 'User\UserDetailController@index')->name('userDetails')->middleware('auth');
Route::get('users/add', 'User\UserController@insertNew')->name('userAdd')->middleware('auth');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
