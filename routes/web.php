<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/attendance',function(){
    return view('layouts.attendance.index');
})->name('attendance');

Route::get('/test',function(){
    return view('header');
});
