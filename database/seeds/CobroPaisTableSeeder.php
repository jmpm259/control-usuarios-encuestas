<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CobroPaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = \App\Models\Pais::all()->toarray();
        if(!empty($table))
        {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
            DB::table('encuestadora_pais')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        }

        $paisT = \App\Models\Pais::where('pais','=','TAILANDIA')->get()->toArray();
        $paisC = \App\Models\Pais::where('pais','=','CANADA')->get()->toArray();
        $enc = \App\Models\Encuestadora::where('encuestadora','=','GLOBALTESTMARKET')->get()->toArray();
        
        $encuestadora_pais = [
            ['encuestadora_id' => $enc[0]['id'],
            'pais_id' => $paisT[0]['id'], 
            'cobro' => '4480', 
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')],
            
            ['encuestadora_id' => $enc[0]['id'],
            'pais_id' => $paisC[0]['id'],  
            'cobro' => '1120',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')]
        ];

        DB::table('encuestadora_pais')->insert($encuestadora_pais);
    }
}
