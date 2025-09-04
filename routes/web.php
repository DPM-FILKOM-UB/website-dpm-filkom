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

Route::get('/kegiatan', function(){
    return Inertia::render('Activity');
});

Route::get('/kegiatan-detail', function(){
    return Inertia::render('ActivityDetail');
});
