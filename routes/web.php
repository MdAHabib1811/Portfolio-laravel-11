<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'home']);
Route::get('/about', [PortfolioController::class, 'about']);
Route::get('/skill', [PortfolioController::class, 'skill']);
Route::get('/service', [PortfolioController::class, 'service']);
Route::get('/project', [PortfolioController::class, 'project']);
Route::get('/blog', [PortfolioController::class, 'blog']);
Route::get('/blog_detail', [PortfolioController::class, 'blog_detail']);
Route::get('/contact', [PortfolioController::class, 'contact']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
