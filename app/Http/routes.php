<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('front-end.pages.home');
});
Route::get('/category', function () {
    return view('front-end.pages.category');
});
Route::get('/product', function () {
    return view('front-end.pages.product_detail');
});
Route::get('/login', function () {
    return view('auth.login');
});