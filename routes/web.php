<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/', [AuthController::class, 'authenticate'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('/blog/post/view', [BlogsController::class, 'index'])->name('post.view');
Route::get('/blog/post/show/{id}', [BlogsController::class, 'show'])->name('post.show');
Route::get('/blog/post/create', [BlogsController::class, 'create'])->name('post.create');
Route::post('blog/post/store', [BlogsController::class, 'store'])->name('post.store');
Route::delete('blog/posts/{id}', [BlogsController::class, 'destroy'])->name('post.destroy');
Route::post('blog/post/update/{id}', [BlogsController::class, 'update'])->name('post.update');
Route::post('/ckeditor/upload', [BlogsController::class, 'upload'])->name('ckeditor.upload');