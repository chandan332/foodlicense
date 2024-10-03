<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::controller(AdminController::class)->prefix("admin")->group(function () {
    Route::get("/", "index")->name("admin")->middleware("admin");
    Route::post("/", "login")->name("admin.login");
    Route::get("/login", "loginPage")->name("admin.login.page");
});
