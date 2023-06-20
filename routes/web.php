<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserDashboardController;

// User Auth Routes 
Route::get("signup",[RegistrationController::class,"register"]);
Route::post("signup",[RegistrationController::class,"registerPost"]);
Route::get('logout', [RegistrationController::class,"logout"])->name('logout');
Route::get("signin",[RegistrationController::class,"login"])->name('signin');
Route::get("signup",[RegistrationController::class,"register"]);
Route::post('dashboardlogin',[RegistrationController::class,"processLogin"])->name('dashboardlogin');


// User Frontend Routes 
Route::get("dashboard",[UserDashboardController::class,"index"]);

// Admin Panel Routes 
Auth::routes();
Route::get('administrator/dashboard', [DashboardController::class, 'index'])->middleware('auth');