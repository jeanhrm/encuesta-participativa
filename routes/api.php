<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RespuestaController;

Route::middleware('throttle:60,1')->group(function () {
    Route::post('/validar-codigo', [RespuestaController::class, 'validarCodigo']);
    Route::post('/respuestas', [RespuestaController::class, 'store']);
});