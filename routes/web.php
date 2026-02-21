<?php

use Illuminate\Support\Facades\Route; 


Route::prefix('admin')->group (function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);        
    Route::get('/event', [EventController::class, 'index']);
});
