<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// ✅ Ensure this POST route exists
Route::post('/store', [HomeController::class, 'store'])->name('store');

