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

Route::get('tutorial/{id}','Frontend\\PagesController@tutorial');

Route::resource('category', 'Backend\\CategoryController', ['only' => ['index', 'destroy', 'store']]);
Route::resource('admin/pages', 'Backend\\PagesController');
Route::get('admin/pages', 'Frontend\\PagesController@admin')->middleware('auth');
Route::resource('admin/pages/{id}/sections', 'Backend\\SectionsController');

Auth::routes();
