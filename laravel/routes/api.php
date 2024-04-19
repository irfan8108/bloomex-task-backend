<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| API Resource
|--------------------------------------------------------------------------
|
| API Resource excldes the create and edit routes
| and provide only required routes for API crud
|
*/

Route::apiResource('tasks', TaskController::class);