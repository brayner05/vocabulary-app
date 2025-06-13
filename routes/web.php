<?php

use App\Http\Controllers\LanguageController;
use App\Models\Language;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/languages', [LanguageController::class, 'list']);

Route::post('/languages', [LanguageController::class, 'store']);
