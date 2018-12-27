<?php

use Illuminate\Database\Seeder;

class AmenazasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('amenazas')->truncate();

      DB::table('amenazas')->insert([
        'activoId' => 1,
        'nombre' => 'Incendio',
        'probabilidad' => 'Baja',
        'impacto' =>'Alto',
        'matrizRiesgoId' => 3,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 2,
        'nombre' => 'Interrupción suministro de energía eléctrica',
        'probabilidad' => 'Baja',
        'impacto' =>'Bajo',
        'matrizRiesgoId' => 1,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 3,
        'nombre' => 'Vandalismo',
        'probabilidad' => 'Baja',
        'impacto' =>'Bajo',
        'matrizRiesgoId' => 1,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 4,
        'nombre' => 'Robo',
        'probabilidad' => 'Media',
        'impacto' =>'Medio',
        'matrizRiesgoId' => 5,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 5,
        'nombre' => 'Fallas en los equipos',
        'probabilidad' => 'Media',
        'impacto' =>'Alto',
        'matrizRiesgoId' => 6,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 6,
        'nombre' => 'Accesos no autorizados a la organización',
        'probabilidad' => 'Media',
        'impacto' =>'Alto',
        'matrizRiesgoId' => 6,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 7,
        'nombre' => 'Inundación',
        'probabilidad' => 'Baja',
        'impacto' =>'Medio',
        'matrizRiesgoId' => 2,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 8,
        'nombre' => 'Accesos no autorizados al sistema',
        'probabilidad' => 'Media',
        'impacto' =>'Alto',
        'matrizRiesgoId' => 6,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 9,
        'nombre' => 'Errores en los datos y transacciones',
        'probabilidad' => 'Media',
        'impacto' =>'Bajo',
        'matrizRiesgoId' => 4,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 10,
        'nombre' => 'Malware',
        'probabilidad' => 'Baja',
        'impacto' =>'Alto',
        'matrizRiesgoId' => 3,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 11,
        'nombre' => 'Robo de datos',
        'probabilidad' => 'Media',
        'impacto' =>'Alto',
        'matrizRiesgoId' => 6,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 12,
        'nombre' => 'Caída del sistema',
        'probabilidad' => 'Media',
        'impacto' =>'Alto',
        'matrizRiesgoId' => 6,
      ]);

      DB::table('amenazas')->insert([
        'activoId' => 13,
        'nombre' => 'Fraude asistido por computadora',
        'probabilidad' => 'Alta',
        'impacto' =>'Alto',
        'matrizRiesgoId' => 9,
      ]);


    }
}
