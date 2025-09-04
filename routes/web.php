<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return Inertia::render('Home');
});

Route::get('/tentang', function(){
    return Inertia::render('About');
});

Route::get('/struktur-organisasi', function(){
    return Inertia::render('Structure');
});

Route::get('/informasi', function(){
    return Inertia::render('Information');
});

Route::get('/detail-informasi', function(){
    return Inertia::render('Information');
});
