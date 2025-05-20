<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class, 'showForm']);
Route::post('/submit', [ContactController::class, 'submitForm'])->name('contact.submit');

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('home');
});

Auth::routes();
