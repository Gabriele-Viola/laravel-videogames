<?php

use App\Http\Controllers\Admin\DashbordController;
use App\Http\Controllers\Admin\GenresController;
use App\Http\Controllers\Admin\PlatformController;
use App\Http\Controllers\Admin\VideogameController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('videogames', VideogameController::class)
    ->middleware(['auth', 'verified']);

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get("/", [DashbordController::class, 'index'])
            ->name('index');
        Route::prefix('settings')
            ->name('settings.')
            ->group(function () {
                Route::get('/', function () {
                    return view('settings.index');
                });
                Route::resource('genres', GenresController::class);
                Route::resource('platforms', PlatformController::class);
            });
    });

require __DIR__ . '/auth.php';
