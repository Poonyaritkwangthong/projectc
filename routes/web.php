<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\EngineController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/brand',BrandController::class);
Route::resource('/engine',EngineController::class);
Route::resource('/car',CarController::class);
