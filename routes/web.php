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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/shop', function (){
    return view('shop');
});
/***************************************************
 *  ||   Par sho neesmu parliecinats kaa, bet
 *  ||   ideja ir izmantot template PRODUCT lapu,
 *  ||   kura izvelk datus no datu bazes un attelo 
 * \  /  izveleto produktu, lai katram produktam
 *  \/   nevajadzetu taisit atsevisku lapu.
 **************************************************/
Route::get('/product', function (){
    return view('product'); 
});

Route::get('/register', function (){
    return view('register');
});

Route::get('/basket', function (){
    return view('basket');
});

Route::get('/user', function (){
    return view('user');
});

Route::get('/employee', function (){
    return view('employee');
});

Route::get('/employee/addProduct', function (){
    return view('employee_addProduct');
});

Route::get('/employee/editProduct', function (){
    return view('employee_editProduct.blade');
    //bez shi varetu iztikt, ja sanak plaanotaa PRODUCT lapa
});