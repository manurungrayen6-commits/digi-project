<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
