<?php

use App\Models\Language;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/languages', function () {
    $languages = Language::all();
    return view('languages', [
        'languages' => $languages
    ]);
});
