<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

// Single-page portfolio route
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.home');

// Optional: redirect root to portfolio
Route::get('/', function () {
    return redirect()->route('portfolio.home');
});
