<?php

use App\Http\Controllers\Api\DishController;
use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\TypologyController;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/restaurant', [RestaurantController::class, 'index']);

Route::get('/typologies', [TypologyController::class, 'index']);

Route::get('/dishes', [DishController::class, 'index']);

// rotta per la show del singolo ristorante
Route::get('/restaurant/{id}', [RestaurantController::class, 'show']);