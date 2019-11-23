<?php

use Illuminate\Database\Seeder;

class AlcaldiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
   dia
     * @return void
     */
    public function run()
    {
        DB::table('alcaldias')->insert([
            'alcaldia'=>'Álvaro Obregón'
        ]);
        
        DB::table('alcaldias')->insert([
           'alcaldia'=>'Azcapotzalco'
        ]);
        
        DB::table('alcaldias')->insert([
            'alcaldia'=>'Benito Juarez'
        ]);
        
        DB::table('alcaldias')->insert([
            'alcaldia'=>'Coyocán'
        ]);
        
        DB::table('alcaldias')->insert([
            'alcaldia'=>'Cuajimalpa de Morelos'
        ]);
        
        DB::table('alcaldias')->insert([
            'alcaldia'=>'Cuautemoc'
        ]);
        
        DB::table('alcaldias')->insert([
            'alcaldia'=>'Gustavo A. Madero'
        ]);
        
        DB::table('alcaldias')->insert([
            'alcaldia'=>'Iztacalco'
        ]);
        
        DB::table('alcaldias')->insert([
            'alcaldia'=>'La Magdalena Contreras'
        ]);
        
        DB::table('alcaldias')->insert([
            'alcaldia'=>'Miguiel Hidalgo'
        ]);
        DB::table('alcaldias')->insert([
            'alcaldia'=>'Milpa Alta'
        ]);
        DB::table('alcaldias')->insert([
            'alcaldia'=>'Tláhuac'
        ]);
        DB::table('alcaldias')->insert([
            'alcaldia'=>'Tlalpan'
        ]);
        DB::table('alcaldias')->insert([
           'alcaldia'=>'Venustiano Carranza'
        ]);
        DB::table('alcaldias')->insert([
           'alcaldia'=>'Xochimilco'
        ]);
        
    }
}
