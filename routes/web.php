<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\OverviewController;
use Illuminate\Support\Facades\Route;

Route::name('auth.')->prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
});

Route::redirect('/', '/overviews');

Route::name('overviews.')->prefix('overviews')->group(function () {
    Route::get('/', [OverviewController::class, 'index'])->name('index');
});

Route::name('competitions.')->prefix('competitions')->group(function () {
    Route::get('/', [CompetitionController::class, 'index'])->name('index');
    Route::get('/create', [CompetitionController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [CompetitionController::class, 'edit'])->name('edit');
    Route::get('/{id}', [CompetitionController::class, 'show'])->name('show');
    // Route::post('/competitions', [CompetitionController::class, 'store'])->name('store');
    // Route::put('/{id}', [StudentController::class, 'update'])->name('update');
    // Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
}); 

Route::name('schedules.')->prefix('schedules')->group(function () {
    Route::get('/', [ScheduleController::class, 'index'])->name('index');
});

Route::name('achievements.')->prefix('achievements')->group(function () {
    Route::get('/', [AchievementController::class, 'index'])->name('index');
    Route::get('/create', [AchievementController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [AchievementController::class, 'edit'])->name('edit');
    Route::get('/{id}', [AchievementController::class, 'show'])->name('show');
    Route::post('/', [AchievementController::class, 'store'])->name('store');
    Route::put('/{id?}', [AchievementController::class, 'update'])->name('update');
    Route::delete('/{id}', [AchievementController::class, 'destroy'])->name('destroy');
});