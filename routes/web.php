<?php

use App\Livewire\Auth\ForgotPassword;
use App\Livewire\Auth\Login;
use App\Livewire\Home\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/login', Login::class)->name('login');
Route::get('/register', Login::class)->name('register');
Route::get('/forgot-password', ForgotPassword::class)->name('forgot-password');
Route::get('/reset-password', ForgotPassword::class)->name('reset-password');
Route::get('/verify', ForgotPassword::class)->name('verify');

