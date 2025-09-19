<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.home');

Route::get('/', function () {
    return redirect()->route('portfolio.home');
});