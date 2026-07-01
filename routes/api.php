<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RespuestaController;

Route::middleware('throttle:60,1')->group(function () {
    Route::post('/validar-codigo', [RespuestaController::class, 'validarCodigo']);
    Route::post('/respuestas', [RespuestaController::class, 'store']);
});

Route::get('/test-codigo', function() {
    $codigo = '0421255';
    $ie = \Illuminate\Support\Facades\DB::table('instituciones')
             ->where('codigo_modular', $codigo)
             ->first();
    return response()->json([
        'buscado' => $codigo,
        'encontrado' => $ie,
    ]);
});