<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SessionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
Route::get("/collection",[ProductController::class,"index"])->name("collection");
Route::get("/collection/{product:slug}",[ProductController::class,"show"]);

Route::get("/register",[UserController::class,"create"])->middleware('guest');
Route::post("/register",[UserController::class,"store"]);

Route::get("/login",[SessionController::class,"create"])->middleware('guest');
Route::post("/login",[SessionController::class,"store"]);

Route::get("/profile",[UserController::class,"show"])->middleware('auth');

