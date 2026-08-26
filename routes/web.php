<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'auth/login')->name('home');

Route::apiResource('students', \App\Http\Controllers\StudentController::class);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return inertia('Dashboard');
    })->name('dashboard');

});
 require __DIR__.'/settings.php';
 