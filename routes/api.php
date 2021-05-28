<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [\App\Http\Controllers\Api\Auth\AuthController::class, 'login']);
Route::post('/logout', [\App\Http\Controllers\Api\Auth\AuthController::class, 'logout']);

Route::prefix('/account')->group(function () {
    Route::get('', [\App\Http\Controllers\Api\Data\AccountController::class, 'index']);
    Route::post('', [\App\Http\Controllers\Api\Data\AccountController::class, 'store']);
});
