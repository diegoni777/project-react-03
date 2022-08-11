<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;

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
//--------------CONSULTA-------------------//
Route::get('/get01', [SystemController::class, 'get01']);
Route::get('/get02', [SystemController::class, 'get02']);
Route::get('/get03', [SystemController::class, 'get03']);
Route::get('/get04/{id}', [SystemController::class, 'get04']);
Route::get('/get05/{id}', [SystemController::class, 'get05']);
Route::get('/get06/{id}', [SystemController::class, 'get06']);

//--------------AGREGADA AL PROYECTO------//
Route::get('/get07', [SystemController::class, 'get07']);
//--------------Creación-------------------//
Route::post('/post01', [SystemController::class, 'post01']);
//-----------------Modificación--------------//
Route::put('/put01/{id}', [SystemController::class, 'put01']);
//------------------baja---------------//
Route::delete('/del01/{id}', [SystemController::class, 'del01']);

//--------------GRUPOS---------//
Route::get('/get01g', [SystemController::class, 'get01g']);
