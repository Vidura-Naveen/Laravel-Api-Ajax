<?php
use App\Http\Controllers\ProductRestApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('products', ProductRestApiController::class); // php artisan install:api run karanna aniwa
