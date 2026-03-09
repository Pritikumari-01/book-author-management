<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;

Route::get('/authors-ui', [AuthorController::class, 'index']);
Route::get('/authors/create', [AuthorController::class, 'create']);
Route::post('/authors/store', [AuthorController::class, 'store']);
Route::get('/authors/edit/{id}', [AuthorController::class, 'edit']);
Route::post('/authors/update/{id}', [AuthorController::class, 'update']);
Route::get('/authors/delete/{id}', [AuthorController::class, 'destroy']);
Route::get('/authors/view/{id}', [AuthorController::class, 'show']);


Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create', [BookController::class, 'create']);
Route::post('/books/store', [BookController::class, 'store']);
Route::get('/books/edit/{id}', [BookController::class, 'edit']);
Route::post('/books/update/{id}', [BookController::class, 'update']);
Route::get('/books/delete/{id}', [BookController::class, 'destroy']);
Route::get('/books/view/{id}', [BookController::class, 'show']);