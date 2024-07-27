<?php

use App\Http\Controllers\ConfigurationsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.frontend.home');
});

Route::group(['prefix' => 'admin'], function() {
    Route::get("/", [HomeController::class, "index"])->name("admin.index");
    Route::group(['prefix' => 'configurations'], function() {
        Route::get("/", [ConfigurationsController::class, "index"])->name("configurations.index");
        Route::put("/update", [ConfigurationsController::class, "update"])->name("configurations.update");
    });
});

