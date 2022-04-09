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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/resultado', [App\Http\Controllers\APIController::class, 'index']);
Route::get('/resultado/{id}', [App\Http\Controllers\APIController::class, 'show']);
Route::post('/resultado ', [App\Http\Controllers\APIController::class, 'store']);
Route::put('/resultado/{id}', [App\Http\Controllers\APIController::class, 'edit']);
Route::delete('/resultado/{id}', [App\Http\Controllers\APIController::class, 'destroy']);


