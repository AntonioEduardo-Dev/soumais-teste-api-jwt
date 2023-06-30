<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// rota de criação de token, 
Route::post('/token', [\App\Http\Controllers\ConsumidorController::class, 'gerarToken']);

// middleware com rota para teste de token, com pesquisa por cpf
Route::middleware(['jwt.verify'])->group(function () {
    Route::get('/consumers', [\App\Http\Controllers\ConsumidorController::class, 'testApi']);
});