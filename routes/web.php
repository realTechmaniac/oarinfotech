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

Route::get('/shop', 'PagesController@shop')->name('shop');

Route::get('/showlaptops', 'PagesController@showLaptops')->name('laptops');

Route::get('/showphones', 'PagesController@showPhones')->name('phones');

Route::get('/laptopaccess', 'PagesController@showLapAccess')->name('laptopaccess');

Route::get('/phoneaccess', 'PagesController@showPhoneAccess')->name('phoneaccess');


//CART ROUTES::

Route::get('/cart', 'CartController@index')->name('cart.index');

Route::post('/cart', 'CartController@store')->name('cart.store');

Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');

//Update Qty in Cart::

Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');

Route::post('/cart/switchToSaveForLater{product}', 'CartController@switchToSaveForLater')->name('cart.switch');

Route::get('empty',function(){

	Cart::instance('saveForLater')->destroy();
});

//Store route::

Route::get('/store', 'PagesController@store')->name('store');

Route::get('/activate_slider', 'SliderController@activate');

Route::get('/deactivate/{slider}', 'SliderController@deactivate');

Route::get('/activate/{slider}', 'SliderController@activate');

Route::post('/categories/{category}/products', 'ProductCategoryController@store');

Route::get('/add-to-cart/{id}','ProductController@addToCart');


//GUEST CHECK OUT::


Route::get('/profile','PagesController@showProfile');

Route::get('/showproduct/{id}', 'PagesController@showProduct');

Auth::routes();

Route::get('/home', 'PagesController@index')->name('home');

Route::get('/showlogin', 'ClientController@showLogin')->name('showlogin');

Route::get('/showregister', 'ClientController@showRegister')->name('showregister');

Route::get('/removeitem/{id}','ClientController@removeitem');

Route::post('/updateqty', 'ClientController@updateqty');

Route::get('/reset', 'ClientController@recoverPassword');

Route::post('/saveaccount','ClientController@saveaccount');

Route::post('/accessaccount','ClientController@accessaccount');


Route::get('/users', 'ClientController@showAllUsers');

//Route to handle all PRODUCTS CRUD operations:

Route::resource('products', 'ProductController');

//Route to handle all Categories CRUD OPERATIONS::

Route::resource('categories','CategoriesController');

Route::resource('sliders','SliderController');

Route::get('delete_slider{id}', 'SliderController@deleteSlider');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/orders', 'OrderController@index');

Route::patch('/approveorder/{id}', 'OrderController@approveOrder');

Route::patch('/dissapproveorder/{id}', 'OrderController@dissaproveOrder');

Route::delete('/deleteorder/{id}', 'OrderController@deleteOrder');

//All admin Login Routes stated below::

Route::prefix('admin')->group(function(){

	Route::get('/', 'AdminController@index')->name('admin.dashboard');

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');

	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

	
});

Route::get('/allusersorders', 'AdminController@showOrders');

Route::get('/listusers', 'PagesController@listUsers');

//ROUTES WITH AUTH MIDDLEWARE::--->

Route::middleware('auth')->group( function(){

	Route::get('/userprofile', 'UserController@edit')->name('user.edit');

	Route::patch('/userprofile', 'UserController@update')->name('user.update');

	Route::get('/userdashboard', 'PagesController@showUserDashboard');

	Route::get('/book','BookingController@index');

	Route::post('/order','OrderController@store');

	Route::get('/booksuccess', 'PagesController@showMessage');

});

Route::get('/search','ShopController@search')->name('search');