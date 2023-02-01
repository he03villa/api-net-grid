<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FavoritoController;
use App\Http\Controllers\UserController;

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

/* Ruta de Faboritos */
/* Route::get('/favorito', [FavoritoController::class, 'index']); */
Route::get('/favorito/{id}', [FavoritoController::class, 'show']);
Route::post('/favorito', [FavoritoController::class, 'store']);
Route::delete('/favorito/{favorito}', [FavoritoController::class, 'destroy']);

/* Ruta de usuario */
Route::post('/user', [UserController::class, 'store']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/user/{user}', [UserController::class, 'show']);
Route::put('/user/{user}', [UserController::class, 'update']);