<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiPlayerController;

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

Route::get('/player', [ApiPlayerController::class,'index']);
Route::post('/player', [ApiPlayerController::class,'store']);
Route::get('/player/{id}', [ApiPlayerController::class,'show']);
Route::put('/player/{id}', [ApiPlayerController::class,'update']);
Route::delete('/player/{id}', [ApiPlayerController::class,'destroy']);
