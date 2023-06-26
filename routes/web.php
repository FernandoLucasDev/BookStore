<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/', [BookController::class, 'index']);
    Route::get('/form', function () {
        return view('form');
    });
    Route::post('/save', [BookController::class, 'store']);
    Route::get('/delete/{id}', [BookController::class, 'destroy']);
});

Auth::routes();