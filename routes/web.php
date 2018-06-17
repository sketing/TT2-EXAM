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

Route::get('/', 'PagesController@index');
Route::get('/services', 'PagesController@services');
/****************
 *  
 *     PAGES  
 * 
 ****************/
/***************************************************
 *  ||   Par sho neesmu parliecinats kaa, bet
 *  ||   ideja ir izmantot template PRODUCT lapu,
 *  ||   kura izvelk datus no datu bazes un attelo 
 * \  /  izveleto produktu, lai katram produktam
 *  \/   nevajadzetu taisit atsevisku lapu.
 *************************************************/
Route::get('/shop', 'ProductsController@index');

Route::get('/register', 'PagesController@register');

Route::get('/login', 'PagesController@login');

Route::get('/user', 'PagesController@user');

Route::get('/basket', 'PagesController@basket');

Route::get('/checkout', 'PagesController@checkout');

Route::get('/employee','PagesController@employee');

Route::get('/employee/addProduct','PagesController@employee_addProduct');

Route::get('/employee/editProduct', 'PagesController@employee_editProduct');
    //bez shi varetu iztikt, ja sanak plaanotaa PRODUCT lapa
Route::resource('products', 'ProductsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
