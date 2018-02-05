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

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
  Route::get('/', 'HomeController@index')->name('home');
});


Route::group(['middleware' => 'admin'], function() {
  Route::get('admin_dashboard', 'AdminDashboardController@index')->name('admin_dashboard');
});


Route::group(['middleware' => 'client'], function() {
  Route::get('client_dashboard', 'ClientDashboardController@index')->name('client_dashboard');
});