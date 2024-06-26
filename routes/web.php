<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/header', function () {
    return view('header');
});

Route::get('primo', function(){
    return view('primo');
});

Route::get('/secondo', function () {
    return view('secondo');
});

Route::get('/terzo', function () {
    return view('terzo');
});
