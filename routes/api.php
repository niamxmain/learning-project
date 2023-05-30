<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/projects', App\Http\Controllers\Api\ProjectController::class);
Route::apiResource('/post', App\Http\Controllers\Api\ProjectController::class);
Route::apiResource('/project', App\Http\Controllers\Api\ProjectController::class);

