<?php

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

Route::get('/',[\App\Http\Controllers\UserController::class,'index']);
Route::get('/show/{book}',[\App\Http\Controllers\UserController::class,'show'])->name('show.book');
Route::get('download/{id}',[\App\Http\Controllers\UserController::class,'book_download'])->name('book.download');
Route::get('/books',[\App\Http\Controllers\UserController::class, 'all_books'])->name('all.books');
Route::get('/search/',[\App\Http\Controllers\UserController::class,'search_books'])->name('book.search');
Route::get('filtr/{name}/{id}',[\App\Http\Controllers\UserController::class, 'filtr_books'])->name('category.books');

Route::resource('admin/books', \App\Http\Controllers\BookController::class)->middleware('auth:sanctum');
Route::resource('admin/category', \App\Http\Controllers\CategoryController::class)->middleware('auth:sanctum');
Route::resource('admin/author', \App\Http\Controllers\AuthorController::class)->middleware('auth:sanctum');
Route::resource('admin/genre', \App\Http\Controllers\GenreController::class)->middleware('auth:sanctum');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
