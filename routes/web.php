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

Route::get('tutorial/{slug}','Frontend\\PagesController@tutorial');

Route::resource('category', 'Backend\\CategoryController', ['only' => ['index', 'destroy', 'store']]);
Route::resource('admin/pages', 'Backend\\PagesController', ['except' => ['index']]);
Route::get('admin/pages', 'Frontend\\PagesController@admin')->middleware('auth');
Route::resource('admin/pages/{page}/sections', 'Backend\\SectionsController', ['except' => ['index', 'show']]);
Route::get('admin/pages/{page}/sections', 'Backend\\SectionsController@Show');
Route::resource('admin/pages/{page}/sections/{section}/tutorial' , 'Backend\\TutorialController',['only' => ['create']]);
Route::get('admin/pages/{page}/sections/{section}/tutorial' , 'Backend\\TutorialController@Show');
Route::get('admin/pages/{page}/sections/{section}/tutorial/edit' , 'Backend\\TutorialController@Edit');
Route::delete('admin/pages/{page}/sections/{section}/tutorial' , 'Backend\\TutorialController@destroy');
Route::post('admin/pages/{page}/sections/{section}/tutorial' , 'Backend\\TutorialController@update');
Route::post('admin/pages/{page}/sections/{section}/tutorial' , 'Backend\\TutorialController@store');
Auth::routes();
