<?php

use App\Http\Controllers\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::apiResource('/project', App\Http\Controllers\Api\ProjectController::class);
Route::group(['prefix' => 'v1'], function () {
    Route::apiResource('project', ProjectController::class);
});
