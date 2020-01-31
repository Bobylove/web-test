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
    return view('/index');
});

Route::get('/public/galerie', function () {
    return view('galerie');
});
Route::get('/public/header', function () {
    return view('header');
});
Route::get('/public/portfolio', function () {
    return view('portfolio');
});
Route::get('/public/contact', function () {
    return view('contact');
});
Route::get('/public/about', function () {
    return view('apropos');
});
