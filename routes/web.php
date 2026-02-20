<?php

use Illuminate\Support\Facades\Route; 

Route::get('/articles/{id}', function ($articleId) {
    return 'Artikel ke-' .$articleId;
});

