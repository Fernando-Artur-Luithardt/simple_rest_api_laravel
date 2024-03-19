<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

Route::get('/cars/{id?}', [CarsController::class, 'get']);
Route::put('/cars/{car}', [CarsController::class, 'update']);
Route::delete('/cars/{car}', [CarsController::class, 'delete']);
Route::post('/cars', [CarsController::class, 'create']);
