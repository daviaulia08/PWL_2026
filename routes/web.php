<?php

use Illuminate\Support\Facades\Route; 

Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
