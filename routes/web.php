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
//show single post
Route::get('posts/{id}','postController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
