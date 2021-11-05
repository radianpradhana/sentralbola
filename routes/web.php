<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [PlayerController::class,'index']);
Route::get('/player', [PlayerController::class,'player']);
Route::get('/player/create', [PlayerController::class,'create']);
Route::post('/player', [PlayerController::class,'store']);
Route::get('/player/{id}/edit', [PlayerController::class,'edit']);
Route::put('/player/{id}', [PlayerController::class,'update']);
Route::get('/player/{id}/delete', [PlayerController::class,'destroy']);
Route::get('/player/print_pdf', [PlayerController::class,'print_pdf']);

Auth::routes();

Route::get('/', [HomeController::class, 'index']);

