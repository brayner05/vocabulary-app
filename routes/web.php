<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\UserController;
use App\Models\Language;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/sign-in', [UserController::class, 'sign_in']);

Route::get('/languages', [LanguageController::class, 'list']);
Route::post('/languages', [LanguageController::class, 'store']);
