<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;

/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/


Route::middleware('auth:sanctum')->get('/users', [UserController::class, "index"]);
Route::get('/login', [UserController::class, "login"]);
Route::post("/signup", [UserController::class, "signup"]);

Route::get("/projects", [ProjectController::class, "index"]);
Route::middleware("auth:sanctum")->post("/projects", [ProjectController::class, "store"]);
Route::middleware("auth:sanctum")->delete("/projects/{id}", [ProjectController::class, "destroy"]);