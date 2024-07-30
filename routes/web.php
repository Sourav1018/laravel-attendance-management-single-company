<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('app.dashboard.index');
})->name('dashboard');

Route::get('/attendance', function () {
    return view('app.attendance.index');
})->name('attendance');
