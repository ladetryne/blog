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



Route::get('/contact', 'PagesController@getContact'); 
Route::get('/about', 'PagesController@getAbout'); 
Route::get('/', 'PagesController@getIndex');

Route::resource('posts', 'PostController'); //index, create, store, show, edit, update, destroy
//  GET|HEAD  | posts             | posts.index   | App\Http\Controllers\PostController@index  
//  POST      | posts             | posts.store   | App\Http\Controllers\PostController@store  
//  GET|HEAD  | posts/create      | posts.create  | App\Http\Controllers\PostController@create 
//  GET|HEAD  | posts/{post}      | posts.show    | App\Http\Controllers\PostController@show   
//  PUT|PATCH | posts/{post}      | posts.update  | App\Http\Controllers\PostController@update 
//  DELETE    | posts/{post}      | posts.destroy | App\Http\Controllers\PostController@destroy
//  GET|HEAD  | posts/{post}/edit | posts.edit    | App\Http\Controllers\PostController@edit   
// -----------+-------------------+---------------+--------------------------------------------

