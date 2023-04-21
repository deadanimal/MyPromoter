<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    Log::debug('An informational message.');
    return view('static.home');
});

Route::get('/about', function () {
    return view('static.about');
});

Route::get('/terms', function () {
    return view('static.terms');
});

Route::get('/privacy', function () {
    return view('static.privacy');
});