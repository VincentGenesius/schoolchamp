<?php

use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\HallOfFameController;
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

Route::name('hall-of-fame.')->prefix('hall-of-fame')->group(function () {
    Route::get('/', [HallOfFameController::class, 'index'])->name('index');
    Route::get('/create', [HallOfFameController::class, 'create'])->name('create');
    // Route::get('/{id}', [HallOfFameController::class, 'show'])->name('show');
    // Route::get('/{id}/edit', [HallOfFameController::class, 'edit'])->name('edit');
    // Route::post('/', [HallOfFameController::class, 'store'])->name('store');
    // Route::put('/{id}', [StudentController::class, 'update'])->name('update');
    // Route::delete('/{id}', [StudentController::class, 'destroy'])->name('destroy');
}); 
