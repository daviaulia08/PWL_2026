<?php

use Illuminate\Support\Facades\Route; 

Route::get('/posts/{post}/comments/{comment}', 
function ($postId, $commentId) {
    return 'Pos ke-' .$postId. "Komentar ke-: " . $commentId;
});

