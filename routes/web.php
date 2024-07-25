<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/attendance',function(){
    return view('layouts.attendance.index');
});
