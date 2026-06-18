<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\MessageController;

use Illuminate\Support\Facades\Auth;


Route::middleware('auth:sanctum')->get('/users', [UserController::class, "index"]);
Route::post('/login', [UserController::class, "login"]);
Route::post("/signup", [UserController::class, "signup"]);

Route::get('/me', function() {
    if (Auth::guard('sanctum')->check()) { return response()->json(["status" => "success", "message" => "Токен действителен!"], 200); }
    return response()->json(["status" => "fail", "message" => "Токен недействителен!"], 422);
});

Route::get("/projects", [ProjectController::class, "index"]);
Route::middleware("auth:sanctum")->post("/projects", [ProjectController::class, "store"]);
Route::middleware("auth:sanctum")->delete("/projects/{id}", [ProjectController::class, "destroy"]);

Route::get("/socials", [SocialController::class, "index"]);
Route::middleware("auth:sanctum")->post("/socials", [SocialController::class, "store"]);
Route::middleware("auth:sanctum")->delete("/socials/{id}", [SocialController::class, "destroy"]);

Route::middleware("auth:sanctum")->get("/messages", [MessageController::class, "index"]);
Route::post("/messages", [MessageController::class, "store"]);
Route::middleware("auth:sanctum")->delete("/messages/{id}", [MessageController::class, "destroy"]);
