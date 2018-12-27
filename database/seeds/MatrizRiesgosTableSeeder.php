<?php

use Illuminate\Database\Seeder;

class MatrizRiesgosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('matriz_riesgos')->truncate();

      DB::table('matriz_riesgos')->insert([
        'probabilidad' => 'Baja',
        'impacto' => 'Bajo',
        'riesgo' => 'Muy bajo',
        'ponderacion' => 1,
      ]);

      DB::table('matriz_riesgos')->insert([
        'probabilidad' => 'Baja',
        'impacto' => 'Medio',
        'riesgo' => 'Bajo',
        'ponderacion' => 2,
      ]);

      DB::table('matriz_riesgos')->insert([
        'probabilidad' => 'Baja',
        'impacto' => 'Alto',
        'riesgo' => 'Medio',
        'ponderacion' => 3,
      ]);

      DB::table('matriz_riesgos')->insert([
        'probabilidad' => 'Media',
        'impacto' => 'Bajo',
        'riesgo' => 'Bajo',
        'ponderacion' => 2,
      ]);

      DB::table('matriz_riesgos')->insert([
        'probabilidad' => 'Media',
        'impacto' => 'Medio',
        'riesgo' => 'Medio',
        'ponderacion' => 3,
      ]);

      DB::table('matriz_riesgos')->insert([
        'probabilidad' => 'Media',
        'impacto' => 'Alto',
        'riesgo' => 'Alto',
        'ponderacion' => 4,
      ]);

      DB::table('matriz_riesgos')->insert([
        'probabilidad' => 'Alta',
        'impacto' => 'Bajo',
        'riesgo' => 'Medio',
        'ponderacion' => 3,
      ]);

      DB::table('matriz_riesgos')->insert([
        'probabilidad' => 'Alta',
        'impacto' => 'Medio',
        'riesgo' => 'Alto',
        'ponderacion' => 4,
      ]);

      DB::table('matriz_riesgos')->insert([
        'probabilidad' => 'Alta',
        'impacto' => 'Alto',
        'riesgo' => 'Muy alto',
        'ponderacion' => 5,
      ]);
    }
}
