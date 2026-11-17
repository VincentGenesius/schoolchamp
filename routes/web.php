<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\OverviewController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'loginView'])->name('login-view');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login-post');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::name('overviews.')->prefix('overviews')->group(function () {
        Route::get('/', [OverviewController::class, 'index'])->name('index');
    });

    Route::name('competitions.')->prefix('competitions')->group(function () {
        Route::get('/', [CompetitionController::class, 'index'])->name('index');
        Route::get('/create', [CompetitionController::class, 'create'])->name('create');
        Route::post('/', [CompetitionController::class, 'store'])->name('store');
        Route::get('/{competition}', [CompetitionController::class, 'show'])->name('show');
        Route::get('/{competition}/edit', [CompetitionController::class, 'edit'])->name('edit');
        Route::put('/{competition}', [CompetitionController::class, 'update'])->name('update');
        Route::delete('/{competition}', [CompetitionController::class, 'destroy'])->name('destroy');
    });

    Route::name('schedules.')->prefix('schedules')->group(function () {
        Route::get('/', [ScheduleController::class, 'index'])->name('index');
    });

    Route::name('achievements.')->prefix('achievements')->group(function () {
        Route::get('/', [AchievementController::class, 'index'])->name('index');
    });
});