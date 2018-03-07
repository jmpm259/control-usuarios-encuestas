<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = \App\Models\Ciudad::all()->toarray();
        if(!empty($table))
        {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
            DB::table('ciudades')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        }

        $paisT = \App\Models\Pais::where('pais','=','TAILANDIA')->get()->toArray();
        $paisC = \App\Models\Pais::where('pais','=','CANADA')->get()->toArray();
        $paisE = \App\Models\Pais::where('pais','=','ESTADOS UNIDOS')->get()->toArray();
        $ciudades = [
            ['ciudad' => 'BANGKOK',
            'pais_id' => $paisT[0]['id'],
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')],
            
            ['ciudad' => 'QUEBEC',
            'pais_id' => $paisC[0]['id'],
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')],

            ['ciudad' => 'NEW YORK',
            'pais_id' => $paisE[0]['id'],
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')],
        ];

        DB::table('ciudades')->insert($ciudades);
    }
}