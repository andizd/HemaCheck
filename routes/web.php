<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ScreeningController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/screening/identity', [ScreeningController::class, 'identity'])->name('screening.identity');
Route::post('/screening/identity', [ScreeningController::class, 'storeIdentity'])->name('screening.storeIdentity');

Route::get('/screening/questions', [ScreeningController::class, 'questions'])->name('screening.questions');
Route::post('/screening/questions', [ScreeningController::class, 'store'])->name('screening.store');

Route::get('/screening/result/{screening}', [ScreeningController::class, 'result'])->name('screening.result');

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('/feedback', [FeedbackController::class, 'create'])->name('feedback');
