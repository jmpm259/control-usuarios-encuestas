<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisesTableSeeder extends Seeder
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
            DB::table('paises')->truncate();
            DB::statement('SET FOREIGN_KEY_CHECKS = 1;'); // Reactivamos la revisión de claves foráneas
        }

        $paises = [
            ['pais' => 'TAILANDIA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')],
            
            ['pais' => 'CANADA',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')],

            ['pais' => 'ESTADOS UNIDOS',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s')],
        ];

        DB::table('paises')->insert($paises);
    }
}