<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/brides', function () {
    return view('brides');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/address', function () {
    return view('address');
});