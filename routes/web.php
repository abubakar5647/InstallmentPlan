<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return redirect()->route('login');
});

// Auth Routes (Views)
Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');

// Auth Routes (Actions - Mock)
Route::post('/login', function () {
    // In a real app, validation and auth logic here
    return redirect()->route('dashboard');
});

Route::post('/register', function () {
    // In a real app, registration logic here
    return redirect()->route('dashboard');
});

Route::post('/logout', function () {
    // In a real app, logout logic here
    return redirect()->route('login');
})->name('logout');

// Dashboard Route
Route::view('/dashboard', 'dashboard')->name('dashboard');
