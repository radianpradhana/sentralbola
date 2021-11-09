<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiPemainController;

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

Route::get('/pemain', [ApiPemainController::class,'index']);
Route::post('/pemain', [ApiPemainController::class,'store']);
Route::get('/pemain/{id}', [ApiPemainController::class,'show']);
Route::put('/pemain/{id}', [ApiPemainController::class,'update']);
Route::delete('/pemain/{id}', [ApiPemainController::class,'destroy']);
