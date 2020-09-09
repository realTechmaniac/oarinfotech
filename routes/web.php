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

Route::get('/', 'PagesController@index')->name('home');

//About Page Route::

Route::get('/about','PagesController@about')->name('about');

//About Services Route::

Route::get('/services', 'PagesController@services')->name('services');

//Contact Page Route::

Route::get('/contact', 'PagesController@contact')->name('contact');

//Admin Page Route::

Route::get('/admin', 'PagesController@admin')->name('admin');

//Store rpute::

Route::get('/store', 'PagesController@store')->name('store');


//Route to handle all PRODUCTS CRUD operations:

Route::resource('products', 'ProductController');

//Route to handle all Categories CRUD OPERATIONS::

Route::resource('categories','CategoriesController');


Route::post('/categories/{category}/products', 'ProductCategoryController@store');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


