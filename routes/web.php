<?php

// use App\Http\Controllers\BlogController;
// use App\Http\Controllers\BookController;

use App\Http\Controller\HomeController;
use App\Http\Controller\AboutController;
use App\Http\Controllers\GreetingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/greeting', [GreetingController::class, 'index']);

// Route::get('/', [BlogController::class, 'index']);
// Route::get('/more/{index}', [BlogController::class, 'show'])->name('posts.show');
// Route::get('/hello', [GreetingController::class, 'hello']);
// Route::get('/greet/{name}', [GreetingController::class, 'greet']);
// Route::get('/sum/{a}/{b}', [GreetingController::class, 'sum']);
// Route::get('/books', [BookController::class, 'index'])->name('books.index');
// Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
// Route::post('/books', [BookController::class, 'store'])->name('books.store');
// Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
// Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
// Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
// Route::delete('/books/{id}', [BookController::class, 'destroy'])->name('books.destroy');