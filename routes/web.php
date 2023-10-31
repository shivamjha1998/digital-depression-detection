<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

// Authentication routes
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Questionnaire routes
Route::get('/questionnaire', [QuestionnaireController::class, 'show'])->name('questionnaire.show');
Route::post('/questionnaire', [QuestionnaireController::class, 'store'])->name('questionnaire.store');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
