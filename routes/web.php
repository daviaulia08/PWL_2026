<?php

use Illuminate\Support\Facades\Route; 

Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second Middleware
    });

Route::get('/user/profile', function () {
        // Uses first & second Middleware
    });
});

Route::domain('{account}.example.com')->group (function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});

Route::middleware('auth')->group (function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);        
    Route::get('/event', [EventController::class, 'index']);
});