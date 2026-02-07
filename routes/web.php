<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/destinations', function () {
    return view('destinations');
});

Route::get('/tours', function () {
    return view('tours');
});

Route::get('/contact', function () {
    return view('contact');
});
