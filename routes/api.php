<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// rota de criação de token, 
Route::post('/token', [\App\Http\Controllers\ConsumidorController::class, 'gerarToken']);

// rota para teste de token, com pesquisa por cpf
Route::middleware(['jwt.verify'])->group(function () {
    Route::get('/consumers', [\App\Http\Controllers\ConsumidorController::class, 'testApi']);
});