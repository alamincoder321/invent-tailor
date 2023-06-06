<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

Route::get("/", [LoginController::class, "showLoginForm"]);
Route::post("/login", [LoginController::class, "login"]);
Route::get("/logout", [LoginController::class, "logout"])->name("logout");

//dashboard
Route::get("/dashboard", [HomeController::class, "index"]);