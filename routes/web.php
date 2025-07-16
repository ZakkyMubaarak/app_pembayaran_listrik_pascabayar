<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cek-tagihan', function () {
    return view('view-tagihan');
});
