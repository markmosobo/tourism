<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TourController;

/*
|--------------------------------------------------------------------------
| Public API routes (no auth required)
|--------------------------------------------------------------------------
*/

// Login (Vue sends credentials here)
Route::post('/login', [AuthController::class, 'login']);

// Register (Vue sends registration data here)
Route::post('/register', [AuthController::class, 'register']);


/*
|--------------------------------------------------------------------------
| Authenticated routes (session protected)
|--------------------------------------------------------------------------
*/
Route::middleware('auth:sanctum')->group(function () {

    // Get current logged-in user (VERY IMPORTANT for Vue auth guard)
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Logout
    // Route::post('/logout', [AuthController::class, 'logout']);

    /*
    |--------------------------------------------------------------------------
    | Example protected resources (your dashboard APIs)
    |--------------------------------------------------------------------------
    */

    // Route::get('/profile', [UserController::class, 'profile']);
    // Route::put('/profile', [UserController::class, 'updateProfile']);

    // Route::get('/tours', [TourController::class, 'index']);
    // Route::post('/tours', [TourController::class, 'store']);
    // Route::put('/tours/{id}', [TourController::class, 'update']);
    // Route::delete('/tours/{id}', [TourController::class, 'destroy']);
});