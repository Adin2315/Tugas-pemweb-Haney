<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\GreetingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BlogController::class, 'index']);
Route::get('/more/{index}', [BlogController::class, 'show'])->name('posts.show');
Route::get('/hello', [GreetingController::class, 'hello']);
Route::get('/greet/{name}', [GreetingController::class, 'greet']);
Route::get('/sum/{a}/{b}', [GreetingController::class, 'sum']);
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/books/create', [BookController::class, 'create'])->name('books.create'); // Route untuk form
Route::post('/books', [BookController::class, 'store'])->name('books.store'); // Route untuk menyimpan buku
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
