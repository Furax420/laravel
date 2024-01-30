<?php
// metacritic\routes\api.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserController;

Route::apiResource('countries', CountryController::class);
Route::apiResource('directors', DirectorController::class);
Route::apiResource('movies', MovieController::class);
Route::apiResource('ratings', RatingController::class);
Route::apiResource('users', UserController::class);
?>
