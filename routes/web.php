<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/subscribe', function() { 
    return view('subscribe'); 
})->name('subscribe');
