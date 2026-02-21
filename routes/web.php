<?php

use Illuminate\Support\Facades\Route; 

Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya ' .$name;
});

