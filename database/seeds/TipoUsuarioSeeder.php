<?php

use Illuminate\Database\Seeder;

class TipoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('tipo_usuarios')->insert([
            'tipo' => 'Cliente'
        ]);
         DB::table('tipo_usuarios')->insert([
            'tipo' => 'Administrador'
        ]);
         DB::table('tipo_usuarios')->insert([
            'tipo' => 'Vendedor'
        ]);
        
    }
}
