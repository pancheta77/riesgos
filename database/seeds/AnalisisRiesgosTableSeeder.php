<?php

use Illuminate\Database\Seeder;

class AnalisisRiesgosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('analisis_riesgos')->truncate();

      DB::table('analisis_riesgos')->insert([
        'inventarioId' => 5,
        'ponderacion' => 4,
        'tipoRiesgo' => 'Medio',
      ]);

      DB::table('analisis_riesgos')->insert([
        'inventarioId' => 7,
        'ponderacion' => 6.33,
        'tipoRiesgo' => 'Alto',
      ]);

      DB::table('analisis_riesgos')->insert([
        'inventarioId' => 4,
        'ponderacion' => 3,
        'tipoRiesgo' => 'Bajo',
      ]);

      DB::table('analisis_riesgos')->insert([
        'inventarioId' => 17,
        'ponderacion' => 6,
        'tipoRiesgo' => 'Medio',
      ]);
    }
}
