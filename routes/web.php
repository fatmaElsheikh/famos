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
//Home page
Route::get('/', 'pageController@index');
//About page
Route::get('/about','pageController@about');

//Contact page
Route::get('/contact','pageController@contact');

//posts
Route::get('/posts','postController@index');

//login
Route::get('/login','pageController@login');
//create page
Route::get('posts/create','postController@create');
//store
Route::post('/posts','postController@store');
//Edit
Route::get('/posts/{id}/edit','postController@edit')->name('posts.edit');
//Update
Route::put('/posts/{id}','postController@update')->name('posts.update');
//Delete
Route::delete('/posts/{id}','postController@destroy')->name('posts.destroy');
//show single post
Route::get('posts/{id}','postController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
