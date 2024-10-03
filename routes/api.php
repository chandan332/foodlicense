<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Resources\ClientController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::prefix("v1")->group(function () {
    Route::controller(ClientController::class)->group(function () {
        Route::get("/clients", 'index')->name("client.get");
        Route::get("/clients/{id}", 'show')->name("client.get.id");
        Route::post("/clients/{id}", 'destroy')->name("client.destroy.id");
    });
});
