<?php

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

/* JWT */
Route::prefix('auth')->group(function () {
  Route::post('login', [App\Http\Controllers\API\AuthJWTController::class, 'login']);

  Route::middleware('api')->group(function () {
    Route::post('logout', [App\Http\Controllers\API\AuthJWTController::class, 'logout']);
    Route::post('refresh', [App\Http\Controllers\API\AuthJWTController::class, 'refresh']);
    Route::post('me', [App\Http\Controllers\API\AuthJWTController::class, 'me']);
    Route::post('forcelogout', [App\Http\Controllers\API\AuthJWTController::class, 'forcelogout']);
  });
});

/* Test API */
Route::get('/sample_api/test1', [App\Http\Controllers\API\SampleAPIController::class, 'test1'])->name('api_sample_api_test1');