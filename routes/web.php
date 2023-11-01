<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// Authentication routes
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Questionnaire routes
Route::get('/questionnaire/{step?}', [QuestionnaireController::class, 'show'])
    ->where('step', '[1-9]')
    ->name('questionnaire.show');
Route::post('/questionnaire/{step}', [QuestionnaireController::class, 'store'])->name('questionnaire.store');



// Dashboard routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
