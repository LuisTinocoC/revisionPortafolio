<?php

use App\Http\Controllers\reviewerController;
use App\Http\Controllers\DelegateController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RevisionController;
use App\Models\Reviewer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ventas de cada persona
Route::resource('/portafolio', PortfolioController::class);
// Route::resource('/portafolio/practical-evaluation', PracticalEvaluationController::class);
//Route::resource('/practical', PracticalEvaluationController::class);
Route::resource('/revision', RevisionController::class);
Route::resource('/asignar', DelegateController::class);
Route::resource('/reviewers', ReviewerController::class);
Route::resource('/professors', ProfessorController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
