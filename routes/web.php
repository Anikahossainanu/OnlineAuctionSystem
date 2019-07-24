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
    return view('index');
});

Route::get('/adminPanel', function () {
    return view('AdminPanel');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/ListedProduct', function () {
    return view('ListedProduct');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/tables', function () {
    return view('tables');
});

Route::get('/updateProfile', function () {
    return view('UpdateProfile');
});

Route::get('/uploadProduct', function () {
    return view('UploadProduct');
});

Route::get('/yourBids', function () {
    return view('YourBids');
});






Route::post('/store','CustomerController@store');