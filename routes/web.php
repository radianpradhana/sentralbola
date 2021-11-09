<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemainController;
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

Route::get('/home', [PemainController::class,'index']);
Route::get('/pemain', [PemainController::class,'pemain']);
Route::get('/pemain/create', [PemainController::class,'create']);
Route::post('/pemain', [PemainController::class,'store']);
Route::get('/pemain/{id}/edit', [PemainController::class,'edit']);
Route::put('/pemain/{id}', [PemainController::class,'update']);
Route::get('/pemain/{id}/delete', [PemainController::class,'destroy']);
Route::get('/pemain/print_pdf', [PemainController::class,'print_pdf']);

Auth::routes();

Route::get('/', [HomeController::class, 'index']);

