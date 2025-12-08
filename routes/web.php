<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ScreeningController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/screening', [ScreeningController::class, 'create'])->name('screening.create');
Route::post('/screening', [ScreeningController::class, 'sotre'])->name('screening.store');
Route::get('/screening/{screening}', [ScreeningController::class, 'result'])->name('screening.result');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
