<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RespuestaController extends Controller
{
    public function store(Request $request)
    {
        $codigo = $request->input('codigo_modular');

        $ie = DB::table('instituciones')
                 ->where('codigo_modular', $codigo)
                 ->first();

        if (!$ie) {
            return response()->json([
                'success' => false,
                'message' => 'Código modular no encontrado.'
            ], 404);
        }

        $data = ['codigo_modular' => $codigo];

        foreach (['z1','z2','z3','z4','z5'] as $zona) {
            $max = ['z1'=>7,'z2'=>6,'z3'=>10,'z4'=>10,'z5'=>6][$zona];
            for ($i = 1; $i <= $max; $i++) {
                $key = "{$zona}_p{$i}";
                $data[$key] = $request->input($key);
            }
        }

        DB::table('respuestas')->insert($data);

        return response()->json([
            'success' => true,
            'message' => 'Respuestas guardadas correctamente.',
            'ie'      => $ie->nombre_ie
        ]);
    }

    public function validarCodigo(Request $request)
    {
        $codigo = $request->input('codigo_modular');

        $ie = DB::table('instituciones')
                 ->where('codigo_modular', $codigo)
                 ->first();

        if (!$ie) {
            return response()->json(['success' => false], 404);
        }

        return response()->json([
            'success'  => true,
            'nombre'   => $ie->nombre_ie,
            'ugel'     => $ie->ugel,
            'distrito' => $ie->distrito,
            'provincia'=> $ie->provincia,
        ]);
    }
}