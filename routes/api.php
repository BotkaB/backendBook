<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Route::get('/users',[UserController::class,'index']); //midnen felh.

// Route::post('/users',[UserController::class,'store']); //feltölt


// Route::get('/users/{id}',[UserController::class,'show']);//id alapján kapom


// Route::put('/users/{id}',[UserController::class,'update']);


// Route::delete('/users/{id}',[UserController::class,'destroy']);



Route::get('/books',[BookController::class,'index']);//mutat all

Route::post('/books',[BookController::class,'store']);//feltölt

Route::get('/books/{book_id}',[BookController::class,'show']);

Route::put('/books/{book_id}',[BookController::class,'update']);

Route::delete('/books/{book_id}',[BookController::class,'destroy']);