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

// Home Page
Route::get('/', 'StaticPagesController@home')->name('home');
// Help page
Route::get('/help', 'StaticPagesController@help')->name('help');
// About Page
Route::get('/about', 'StaticPagesController@about')->name('about');

// sign-up
Route::get('/signup', 'UsersController@create')->name('signup');
Route::resource('/users', 'UsersController');
