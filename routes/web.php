<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\FrontController;

Route::get('/', function () {
    return view('frontend.index');
});
//Frontend Routes 
Route::get("/about_us", [FrontController::class, "about_us"])->name('about_us');
Route::get("/all_product", [FrontController::class, "all_product"])->name('all_product');
Route::get("/cart", [FrontController::class, "cart"])->name('cart');
Route::get("/contactus", [FrontController::class, "contactus"])->name('contactus');
Route::get("/privacy_policy", [FrontController::class, "privacy_policy"])->name('privacy_policy');
Route::get("/returns_policy", [FrontController::class, "returns_policy"])->name('returns_policy');
Route::get("/single_page", [FrontController::class, "single_page"])->name('single_page');
Route::get("/wishlist", [FrontController::class, "wishlist"])->name('wishlist');

// User Auth Routes 
Route::get("signup", [RegistrationController::class, "register"]);
Route::post("signup", [RegistrationController::class, "registerPost"]);
Route::get('logout', [RegistrationController::class, "logout"])->name('logout');
Route::get("signin", [RegistrationController::class, "login"])->name('signin');
Route::get("signup", [RegistrationController::class, "register"])->name('signup');
Route::post('dashboardlogin', [RegistrationController::class, "processLogin"])->name('dashboardlogin');

//Forget and Reset Password Routes
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

// Registration OTP Check Routes 
Route::get("/otp", [RegistrationController::class, "otp"])->name('opt');
Route::post("/otp_check", [RegistrationController::class, "otp_check"])->name('otp_check');

Route::group(["prefix" => "empanel", "middleware" => "CheckUser"], function () {

    Route::get("dashboard", [UserDashboardController::class, "index"])->name('dashboard');
    // User Frontend Routes 
    Route::get("/edit-profile", [RegistrationController::class, "edit_profile"])->name('edit_profile');
    Route::post('/edit-profile', [RegistrationController::class, 'edit_profilePost'])->name('edit_profilepost');

    // Transaction Password Change Routes 
    Route::get("/transaction_password", [UserDashboardController::class, "transaction_password"])->name('transaction_password');
    Route::post('/transaction_passwords', [UserDashboardController::class, 'transaction_passwords'])->name('transaction_passwords');
    Route::get("/transaction_otp", [UserDashboardController::class, "transaction_otp"])->name('transaction_otp');
    Route::post("/transaction_password_check", [UserDashboardController::class, "transaction_password_check"])->name('transaction_password_check');

    //My Referral Routes
    Route::get("/my_referral", [UserDashboardController::class, "my_referral"])->name('my_referral');
    Route::get("/my_team", [UserDashboardController::class, "my_team"])->name('my_team');
    Route::get("/my_tree", [UserDashboardController::class, "my_tree"])->name('my_tree');
    Route::get("/investment", [UserDashboardController::class, "investment"])->name('investment');


    //My Withdraw Routes
    Route::get("/withdraw", [UserDashboardController::class, "withdraw"])->name('withdraw');
    Route::post("/add_withdraw", [UserDashboardController::class, "add_withdraw"])->name('add_withdraw');

    Route::post("invest-amount",[UserDashboardController::class,"investAmountPost"]);

});
// Admin Panel Routes 
Auth::routes();
Route::get('administrator/dashboard', [DashboardController::class, 'index'])->middleware('auth');