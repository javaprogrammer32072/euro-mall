<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserDashboardController;


// User Frontend Routes 
Route::get("signup",[RegistrationController::class,"register"]);
Route::get("signin",[RegistrationController::class,"login"]);
Route::get("dashboard",[UserDashboardController::class,"index"]);
Route::get('/', function () {
    return view('welcome');
});

// Admin Panel Routes 
Auth::routes();
Route::get('administrator/dashboard', [DashboardController::class, 'index'])->middleware('auth');
