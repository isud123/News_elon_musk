<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
//project
use App\Http\Controllers\NewsController;

Route::get('/news', [NewsController::class, 'index']);

Route::get('/news/{id}', function ($id) {
    // Query from the database

    // return view  with data

})->name('news.detail');
