<?php


use App\Http\Controllers\BookController;

Route::get('/books', [BookController::class, 'index']);                       // 1. list
Route::get('/books/featured', [BookController::class, 'featured']);           // 2. featured (before {id})
Route::get('/books/filter/{genre?}', [BookController::class, 'filter']);      // 3. filter (before {id})
Route::get('/books/{id}', [BookController::class, 'show']);                   // 4. detail (LAST)