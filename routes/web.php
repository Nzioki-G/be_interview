<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\posts;
use App\Models\comments;
use App\Http\Controllers\PostsController;

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

// create, read, update, delete posts
Route::get('/laryblogger/posts/index', [PostsController::class, 'index']);
Route::get('/laryblogger/posts/show', [PostsController::class, 'show']);
Route::get('/laryblogger/posts/create', [PostsController::class, 'create']);
Route::get('/laryblogger/posts/edit', [PostsController::class, 'edit']);
Route::get('/laryblogger/posts/delete', [PostsController::class, 'delete']);

//posts write operations
Route::post('/laryblogger/posts/store', [PostsController::class, 'store']);
Route::post('/laryblogger/posts/update', [PostsController::class, 'update']);

// CRUD routes for comments
Route::get('/laryblogger/comments/index', [CommentsController::class, 'index']);
Route::get('/laryblogger/comments/show', [CommentsController::class, 'show']);
Route::get('/laryblogger/comments/create', [CommentsController::class, 'create']);
Route::get('/laryblogger/comments/edit', [CommentsController::class, 'edit']);
Route::get('/laryblogger/comments/delete', [CommentsController::class, 'delete']);

// comments write operations
Route::post('/laryblogger/comments/store', [CommentsController::class, 'store']);
Route::post('/laryblogger/comments/delete', [CommentsController::class, 'delete']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';










// // get a blog by id
// Route::get('/laryblogger/{post}', [PostsController::class, 'show']);

// // homepage view
// Route::get('/laryblogger', [PostsController::class, 'index']);

// // write a blog
// Route::get('/laryblogger/create', [PostsController::class, 'create']);//->middleware('auth');

// // save the blog
// Route::post('/laryblogger');
