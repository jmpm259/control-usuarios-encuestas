<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EncuestadorasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {        
        $table = \App\Models\Encuestadora::all()->toarray();
        if(!empty($table))
        {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0;'); // Desactivamos la revisión de claves foráneas
            DB::table('encuestadoras')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        }

        $encuestadoras = [
            ['encuestadora' => 'GLOBALTESTMARKET',
            'cobro' => '1120',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')],
            
            ['encuestadora' => 'OPINION OUTPOST',
            'cobro' => '120',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')]
        ];

        DB::table('encuestadoras')->insert($encuestadoras);
    }
}