<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InstitucionesSeeder extends Seeder
{
    public function run(): void
    {
        $csv = database_path('data/instituciones.csv');
        $rows = array_map('str_getcsv', file($csv));
        $header = array_shift($rows);

        foreach ($rows as $row) {
            DB::table('instituciones')->insertOrIgnore([
                'codigo_modular'   => trim($row[0]),
                'codigo_local'     => trim($row[1]),
                'codigo_institucion'=> trim($row[2]),
                'nombre_ie'        => trim($row[3]),
                'nivel_modalidad'  => trim($row[4]),
                'forma'            => trim($row[5]),
                'genero'           => trim($row[6]),
                'tipo_gestion'     => trim($row[7]),
                'dependencia'      => trim($row[8]),
                'direccion_ie'     => trim($row[9]),
                'localidad'        => trim($row[10]),
                'centro_poblado'   => trim($row[11]),
                'area_geografica'  => trim($row[12]),
                'provincia'        => trim($row[13]),
                'distrito'         => trim($row[14]),
                'ugel'             => trim($row[15]),
                'tipo_programa'    => trim($row[16]),
                'turno'            => trim($row[17]),
            ]);
        }
    }
}