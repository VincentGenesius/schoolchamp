<?php

use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\AchievementController;
use Illuminate\Support\Facades\Route;

Route::name('competitions.')->prefix('competitions')->group(function () {
    Route::get('/', [CompetitionController::class, 'index'])->name('index');
    // Route::get('/create', [CompetitionController::class, 'create'])->name('create');
    // Route::get('/{id}', [CompetitionController::class, 'show'])->name('show');
    // Route::get('/{id}/edit', [CompetitionController::class, 'edit'])->name('edit');
    // Route::post('/', [CompetitionController::class, 'store'])->name('store');
    // Route::put('/{id}', [StudentController::class, 'update'])->name('update');
    // Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
}); 

Route::name('achievement.')->prefix('achievement')->group(function () {
    Route::get('/', [AchievementController::class, 'index'])->name('index');
    // Route::get('/create', [AchievementController::class, 'create'])->name('create');
    // Route::get('/{id}', [AchievementController::class, 'show'])->name('show');
    // Route::get('/{id}/edit', [AchievementController::class, 'edit'])->name('edit');
    // Route::post('/', [AchievementController::class, 'store'])->name('store');
    // Route::put('/{id}', [StudentController::class, 'update'])->name('update');
    // Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
}); 