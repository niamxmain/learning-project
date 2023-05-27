<?php

use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/data', App\Http\Controllers\Api\ProjectController::class);
