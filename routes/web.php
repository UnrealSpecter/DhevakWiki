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

Route::get('/', 'Frontend\\PagesController@Index');
Route::get('succes', 'Frontend\\PagesController@index')->middleware('auth');

Route::resource('tutorial','Frontend\\PagesController');

Route::resource('category', 'Backend\\CategoryController', ['except' => ['create']]);
Route::resource('admin/pages', 'Backend\\PagesController');
Route::get('admin/pages', 'Frontend\\PagesController@admin')->middleware('auth');
Route::resource('sections', 'Backend\\SectionsController', ['except' => ['create']]);

Auth::routes();
