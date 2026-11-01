<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\EnsureUserIsAdmin;
use Illuminate\Support\Facades\Route;


Route::view("/", "index")->name("index");
Route::view("/home", "index")->name("home");

Route::resource("posts", PostController::class);
Route::resource("comments", CommentController::class)->middleware('auth');

// Route::get("/test", [TestController::class, "index"]);
// Route::view("/contact", "contact");


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', EnsureUserIsAdmin::class])->group(function () {
    Route::get('/admin/posts', [AdminController::class, 'index'])->name('admin.index');
    Route::patch('/admin/posts/{post}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/posts/{post}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
