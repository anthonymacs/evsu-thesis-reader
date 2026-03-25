<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('livewire.dashboard.index-page');
})->name('dashboard.index');


Route::get('/profile', function () {
    return view('livewire.profile.setting');
})->name('profile');

Route::get('/login', function () {
    return view('livewire.auth.login');
})->name('login');

Route::get('/register', function () {
    return view('livewire.auth.register');
})->name('register');

Route::get('/pending-approval', function () {
    return view('livewire.auth.pending-approval');
})->name('pending-approval');

Route::post('/logout', function () {
    return redirect()->route('login');
})->name('logout');
Route::get('/home', function () {
    return view('livewire.home.index-page');
})->name('home.index');