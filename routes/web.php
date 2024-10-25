<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/posts/{id}/edit', [PostController::class, 'edit']);        // Edit post form
Route::put('/posts/{id}', [PostController::class, 'update']);           // Update post
Route::delete('/posts/{id}', [PostController::class, 'destroy']);       // Delete post
