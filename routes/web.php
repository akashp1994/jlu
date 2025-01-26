<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/fee', [HomeController::class, 'feepage'])->name('fee');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::post('/register', [HomeController::class, 'store'])->name('register.store');
Route::post('/login', [HomeController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');
