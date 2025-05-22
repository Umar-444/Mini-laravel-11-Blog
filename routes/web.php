<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/category', function () {
        return view('category.index');
    })->name('category');

    Route::resource('articles', ArticleController::class);
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

    Route::resource('products', ProductController::class);
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
});

require __DIR__.'/auth.php';
