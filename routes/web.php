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

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/destination-details', function () {
    return view('destination-details');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/tour-details', function () {
    return view('tour-details');
});
