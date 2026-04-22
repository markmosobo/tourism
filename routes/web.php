<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn () => view('app'));
Route::get('/about', fn () => view('about'));
Route::get('/destinations', fn () => view('destinations'));
Route::get('/tours', fn () => view('tours'));
Route::get('/gallery', fn () => view('gallery'));
Route::get('/contact', fn () => view('contact'));
Route::get('/faq', fn () => view('faq'));
Route::get('/privacy', fn () => view('privacy'));
Route::get('/terms', fn () => view('terms'));
Route::get('/destination-details', fn () => view('destination-details'));
Route::get('/tour-details', fn () => view('tour-details'));

Route::view('/404', '404');




/*
|--------------------------------------------------------------------------
| Vue dashboard (protected)
|--------------------------------------------------------------------------
*/
Route::get('/spa/{any?}', function () {
    return view('spa');
})->where('any', '.*');