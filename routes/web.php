<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Resources\UserController;
use App\Http\Controllers\Resources\OrderController;
use App\Http\Controllers\Resources\TransactionController;
use App\Http\Controllers\Resources\ProductController;

Route::view('/', 'pages.home')->name("home");
Route::view('/about', 'pages.about');
Route::view('/services', 'pages.services');
Route::view('/contact', 'pages.contact');
Route::view('/pricing', 'pages.pricing');
Route::view('/copypricing', 'pages.copypricing');
Route::view('/refundpolicy', 'pages.refundpolicy');
Route::view('/terms&conditions', 'pages.terms');
Route::view('/privacypolicy', 'pages.privacypolicy');
Route::view("/thank-you", "pages.thankyou");

Route::middleware('guest')->group(function () {
    Route::view("/register", "auth.register")->name("register.page");
    Route::view("/login", "auth.login")->name("login.page");
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/register', 'register')->name('register')->middleware('guest');
    Route::post('/login', 'login')->name('login')->middleware('guest');
    Route::get('/logout', 'logout')->name('logout')->middleware('auth');
});

Route::controller(PaymentController::class)->group(function () {
    Route::get('/payment', 'index')->name('payment.index')->middleware('auth');
    Route::get("/payment/success", 'success')->name('payment.success');
    Route::post('/create-order', 'createOrder')->name('create.order');
    Route::post('/payment-callback', 'paymentCallback')->name('payment.callback');
});

Route::controller(FormController::class)->group(function () {
    Route::get("/application", 'showForm')->name('form.show');
    Route::post("/application", 'submitForm')->name("form.submit");
});

Route::resources([
    'users' => UserController::class,
    'orders' => OrderController::class,
    'transactions' => TransactionController::class,
    'products' => ProductController::class
]);

require __DIR__ . '/admin.php';