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
Route::get('alimentos/{id}', [AlimentoController::class, 'show']);
Route::put('alimentos/{id}', [AlimentoController::class, 'update']);
Route::delete('alimentos/{id}', [AlimentoController::class, 'destroy']);

Route::get('bebidas', [BebidaController::class, 'index']);
Route::post('bebidas', [BebidaController::class, 'store']);
Route::get('bebidas/{id}', [BebidaController::class, 'show']);
Route::put('bebidas/{id}', [BebidaController::class, 'update']);
Route::delete('bebidas/{id}', [BebidaController::class, 'destroy']);
