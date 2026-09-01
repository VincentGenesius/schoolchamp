<?php

use App\Http\Controllers\CompetitionController;
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

Route::get('/', function () {
    return view('overview.index');
});

Route::get('/overview', function () {
    return view('overview.index');
});

Route::get('/hall-of-fame', function () {
    return view('hall-of-fame.index');
});

Route::get('/hall-of-fame/create', function () {
    return view('hall-of-fame.create');
});