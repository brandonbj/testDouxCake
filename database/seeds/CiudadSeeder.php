<?php

use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ciudads')->insert([
              'ciudad'=>'CDMX'
        ]);
        DB::table('ciudads')->insert([
              'ciudad'=>'Cancún'
        ]);
        DB::table('ciudads')->insert([
              'ciudad'=>'Oaxaca de Juarez'
        ]);
        DB::table('ciudads')->insert([
             'ciudad'=>'Puebla'
        ]);
        DB::table('ciudads')->insert([
              'ciudad'=>'Ensenada'
        ]);
        DB::table('ciudads')->insert([
              'ciudad'=>'San cristobal de las casas'
        ]);
        DB::table('ciudads')->insert([
              'ciudad'=>'San miguel de allende'
        ]);
        DB::table('ciudads')->insert([
             'ciudad'=>'Veracruz'
        ]);
        
    }
}
