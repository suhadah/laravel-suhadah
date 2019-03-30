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
//cara 1
Route::get('/', function () {//pass function
    return view('welcome');
});

Auth::routes();

//cara 2
Route::get('/home', 'HomeController@index')->name('home');//controller@method
Route::get('/Suhadah', 'suhadahController@index')->name('Suhadah');

Route::get('/posts','PostController@index')->name('posts.index');
Route::get('/posts/create','PostController@create')->name('posts.create');
Route::get('/posts/{post}/edit','PostController@edit')->name('posts.edit');
//post method utk data manipulation
Route::post('/posts','PostController@store')->name('posts.store');
Route::post('/posts/{post}','PostController@update')->name('posts.update');
Route::post('/posts/{post}/','PostController@delete')->name('posts.delete');

