<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('table');
});

Route::get('/report', function () {
    return view('report');
});

Route::get('/register', function () {
    return view('register');
});

// ->middleware(['auth'])->name('dashboard');
