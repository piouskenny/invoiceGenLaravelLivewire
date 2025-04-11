<?php

use App\Livewire\HomeController;
use App\Livewire\Auth\Register;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

//Auth Route
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('login');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', Dashboard::class)->name('dashboard');
});