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
    
    Route::get('/dashboard', 'DashboardController@index');

Route::group(['middleware' => ['web', 'auth']], function(){

    Route::get('/', 'ProductsController@index');

    Route::get('/services', 'PagesController@services');
   
    Route::get('/shop', 'ProductsController@index');
    
    Route::get('/register', 'PagesController@register');

    Route::get('/login', 'PagesController@login');

    Route::get('/user', 'PagesController@user');

    Route::get('/basket', 'PagesController@basket');

    Route::get('/checkout', 'PagesController@checkout');
    
    Route::resource('products', 'ProductsController');

    Route::get('/user/{user}',  ['as' => 'users.edit', 'uses' => 'UsersController@edit']);

    Route::patch('user/{user}/update',  ['as' => 'users.update', 'uses' => 'UsersController@update']);
});
    Auth::routes();
