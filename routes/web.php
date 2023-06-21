<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\ForgotPasswordController;

// User Auth Routes 
Route::get("signup",[RegistrationController::class,"register"]);
Route::post("signup",[RegistrationController::class,"registerPost"]);
Route::get('logout', [RegistrationController::class,"logout"])->name('logout');
Route::get("signin",[RegistrationController::class,"login"])->name('signin');
Route::get("signup",[RegistrationController::class,"register"])->name('signup');
Route::post('dashboardlogin',[RegistrationController::class,"processLogin"])->name('dashboardlogin');

//Forget and Reset Password Routes
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// User Frontend Routes 
Route::get("dashboard",[UserDashboardController::class,"index"])->name('dashboard');
Route::get("/edit-profile",[RegistrationController::class,"edit_profile"])->name('edit_profile');
Route::post('/edit-profile', [RegistrationController::class, 'edit_profilePost'])->name('edit_profilepost');
Route::get("/otp",[RegistrationController::class,"otp"])->name('opt');
Route::post("/otp_check",[RegistrationController::class,"otp_check"])->name('otp_check');




// Admin Panel Routes 
Auth::routes();
Route::get('administrator/dashboard', [DashboardController::class, 'index'])->middleware('auth');