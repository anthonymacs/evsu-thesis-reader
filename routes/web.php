<?php

use Illuminate\Support\Facades\Route;

// Dashboard
Route::get('/dashboard', function () {
    return view('livewire.dashboard.index-page');
})->name('dashboard.index');

// Profile
Route::get('/profile', function () {
    return view('livewire.profile.setting');
})->name('profile');

// Auth
Route::get('/login', function () {
    return view('livewire.auth.login');
})->name('login');

Route::get('/register', function () {
    return view('livewire.auth.register');
})->name('register');

Route::get('/pending-approval', function () {
    return view('livewire.auth.pending-approval');
})->name('pending-approval');

// Logout (POST to prevent CSRF issues)
Route::post('/logout', function () {
    return redirect()->route('login');
})->name('logout');