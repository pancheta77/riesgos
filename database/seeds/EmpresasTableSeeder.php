<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('empresas')->truncate();

      DB::table('empresas')->insert([
        'razonSocial' => 'Aguas de la Provincia de Buenos Aires',
      ]);

      DB::table('empresas')->insert([
        'razonSocial' => 'Consultor Externo - Cobranzas',
      ]);

    }
}
