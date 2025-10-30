<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->name('dashboard');

require __DIR__.'/auth.php';
// user
Route::prefix('user')->as('user.')->middleware(['auth', 'user'])->group(function (): void {
    require __DIR__.'/user.php';
});

// Admin
Route::prefix('admin')->as('admin.')->middleware(['admin'])->group(function (): void {
    require __DIR__.'/admin.php';
});
