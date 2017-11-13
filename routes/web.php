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
    return view('home.index');
});

Route::get('/admin/index', 'Admin\IndexController@index')->name('admin.index');
Route::any('/admin/login', 'Admin\LoginController@login')->name('admin.login');
Route::get('/admin/logout', 'Admin\LoginController@destory');
Route::get('/admin/code', 'Admin\LoginController@code');
Route::get('/admin/getCode', 'Admin\LoginController@getCode');
Route::get('/admin/weclome', 'Admin\IndexController@weclome')->name('admin.weclome');

Route::get('/admin/article/index','Admin\ArticlesController@index');
Route::get('/admin/article/create','Admin\ArticlesController@create');
Route::post('/admin/article/store','Admin\ArticlesController@store')->name('article.store');
Route::get('/admin/article/edit/{article_id}','Admin\ArticlesController@edit');
Route::post('/admin/article/update','Admin\ArticlesController@update')->name('article.update');

Route::get('/admin/category/index','Admin\CategoryController@index');
Route::get('/admin/tag/index','Admin\TagController@index');
