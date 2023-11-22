<?php
use App\Http\Controllers\AlimentoController;
use App\Http\Controllers\BebidaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('alimentos', [AlimentoController::class, 'index']);
Route::post('alimentos', [AlimentoController::class, 'store']);
Route::get('alimentos/{alimento}', [AlimentoController::class, 'show']);
Route::put('alimentos/{alimento}', [AlimentoController::class, 'update']);
Route::delete('alimentos/{alimento}', [AlimentoController::class, 'destroy']);

Route::get('bebidas', [BebidaController::class, 'index']);
Route::post('bebidas', [BebidaController::class, 'store']);
Route::get('bebidas/{bebida}', [BebidaController::class, 'show']);
Route::put('bebidas/{bebida}', [BebidaController::class, 'update']);
Route::delete('bebidas/{bebida}', [BebidaController::class, 'destroy']);
