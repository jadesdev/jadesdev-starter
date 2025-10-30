<?php

Route::get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('logout', App\Livewire\Actions\Logout::class)->name('logout');
