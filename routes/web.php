<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.frontend.home');
});

Route::get('/admin', function () {
    return view('web.backend.home');
})->name("admin.index");
