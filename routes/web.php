<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlayerController;


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

Route::get('/', function () {
	$judul = 'Beranda';
    return view('main', compact(['judul']));
});

Route::get('/player', [PlayerController::class,'index']);
Route::get('/player/create', [PlayerController::class,'create']);
Route::post('/player', [PlayerController::class,'store']);
Route::get('/player/{id}/edit', [PlayerController::class,'edit']);
Route::put('/player/{id}', [PlayerController::class,'update']);
Route::get('/player/{id}/delete', [PlayerController::class,'destroy']);

