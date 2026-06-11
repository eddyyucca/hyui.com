<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/psikotes-online-premium', function () {
    return view('psikotes');
});
