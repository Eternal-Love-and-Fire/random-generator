<?php

use App\Http\Controllers\RandomController;
use Illuminate\Support\Facades\Route;

Route::get('/random', [RandomController::class, 'index']);
Route::get('/random/{id}', [RandomController::class, 'show']);
Route::post('/random', [RandomController::class, 'store']);
