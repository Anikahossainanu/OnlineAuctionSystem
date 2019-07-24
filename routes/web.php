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


Route::get('/ListedProduct', function () {
    return view('ListedProduct');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/signup', function () {
    return view('signup');
});




Route::group(['middleware'=>'checkloggedin'],
    function(){
        Route::get('/adminPanel', function () {
            return view('AdminPanel');
        });

        Route::get('/login', function () {
            return view('login');
        });
        Route::get('/tables', function () {
            return view('tables');
        });

        Route::get('/UpdateProfile', function () {
            return view('UpdateProfile');
        });

        Route::get('/UploadProduct', function () {
            return view('UploadProduct');
        });

        Route::get('/YourBids', function () {
            return view('YourBids');
        });
    });



Route::post('/store','CustomerController@store');

Route::post('/loginStore','CustomerController@loginStore');