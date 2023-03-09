<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
