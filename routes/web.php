<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('livewire.dashboard.index-page');
})->name('dashboard.index');

Route::get('/profile', function () {
    return view('livewire.profile.setting');
})->name('profile');