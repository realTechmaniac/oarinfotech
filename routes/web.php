<?php

use Illuminate\Support\Facades\Route;

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

//Home Page Route::

Route::get('/home', 'PagesController@index')->name('home');

//About Page Route::

Route::get('/about','PagesController@about')->name('about');

//About Services Route::

Route::get('/services', 'PagesController@services')->name('services');

//Contact Page Route::

Route::get('/contact', 'PagesController@contact')->name('contact');

//Admin Page Route::

Route::get('/admin', 'PagesController@admin')->name('admin');



