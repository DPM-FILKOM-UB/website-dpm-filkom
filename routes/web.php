<?php

use Inertia\Inertia;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return Inertia::render('Home');
});

Route::get('/home', [PageController::class, 'index'])->name('home');
