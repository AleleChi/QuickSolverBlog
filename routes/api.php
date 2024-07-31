<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BlogsController;
use App\Http\Controllers\API\CommentController;
use App\Http\Controllers\API\LikeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
//blog post routes
Route::get('blog-posts', [BlogsController::class, 'index']);
Route::get('blog-posts/{id}', [BlogsController::class, 'show']);

//likes routes
Route::post('posts/{postId}/like', [LikeController::class, 'store']);
Route::delete('posts/{postId}/like', [LikeController::class, 'destroy']);

//comments routes
Route::get('posts/{postId}/comments', [CommentController::class, 'index']);
Route::post('posts/{postId}/comments', [CommentController::class, 'store']);
Route::delete('posts/{postId}/comments/{commentId}', [CommentController::class, 'destroy']);