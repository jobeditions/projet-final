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
    return view('login.login');
});

Route::get('/register', function () {
    return view('login.register');
});

Route::get('/mailreset', function () {
    return view('login.email');
});

Route::get('/reset', function () {
    return view('login.password');
});

