<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route; 

Route::get('/hello', [WelcomeController::class, 'hello']);