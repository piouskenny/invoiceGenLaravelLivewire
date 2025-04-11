<?php

use App\Livewire\HomeController;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

//Auth Route
Route::get('/register', Register::class)->name('register');
