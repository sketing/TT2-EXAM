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

    //bez shi varetu iztikt, ja sanak plaanotaa PRODUCT lapa
//Route::group(['middleware' => ['web', 'auth']], function(){

    Route::get('/', 'PagesController@index');

    Route::get('/services', 'PagesController@services');
    
    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/shop', 'ProductsController@index');
    
    Route::get('/register', 'PagesController@register');

    Route::get('/login', 'PagesController@login');

    Route::get('/user', 'PagesController@user');

    Route::get('/basket', ['uses' => 'PagesController@getBasket', 'as' => 'product.getBasket']);

    Route::get('/checkout', 'PagesController@checkout');

    Route::get('/employee','PagesController@employee');

    Route::get('/employee/addProduct','PagesController@employee_addProduct');

    Route::get('/employee/editProduct', 'PagesController@employee_editProduct');
    
    Route::resource('products', 'ProductsController');

    Route::get('/add-to-basket/{id}', ['uses' => 'PagesController@getAddToBasket', 'as' => 'product.getAddToBasket']);

    Route::get('/reduce/{id}', ['uses' => 'PagesController@getReduceByOne', 'as' => 'product.getReduceByOne']);
//});
    Auth::routes();
