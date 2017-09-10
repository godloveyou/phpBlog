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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin/index', 'Admin\IndexController@index')->name('admin.index');
Route::any('/admin/login', 'Admin\LoginController@login');
Route::get('/admin/code', 'Admin\LoginController@code');
Route::get('/admin/getCode', 'Admin\LoginController@getCode');
Route::get('/admin/weclome', 'Admin\IndexController@weclome')->name('admin.weclome');
