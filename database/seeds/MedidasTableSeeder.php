<?php

use Illuminate\Database\Seeder;

class MedidasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('medidas')->truncate();

      DB::table('medidas')->insert([
        'descripcion' => 'Fase de luz alternativa',
        'tipoMedida' => 'Preventiva',
        'amenazaId' => 2,
      ]);

      DB::table('medidas')->insert([
        'descripcion' => 'Nueva instalación cableada',
        'tipoMedida' => 'Preventiva',
        'amenazaId' => 2,
      ]);

      DB::table('medidas')->insert([
        'descripcion' => 'UPS y Generador de energía',
        'tipoMedida' => 'Correctiva',
        'amenazaId' => 2,
      ]);

      DB::table('medidas')->insert([
        'descripcion' => 'Matafuegos',
        'tipoMedida' => 'Correctiva',
        'amenazaId' => 1,
      ]);

      DB::table('medidas')->insert([
        'descripcion' => 'Detectores de humo',
        'tipoMedida' => 'Preventiva',
        'amenazaId' => 1,
      ]);

      DB::table('medidas')->insert([
        'descripcion' => 'Cámaras de video - Circuito cerrado',
        'tipoMedida' => 'Preventiva',
        'amenazaId' => 6,
      ]);

      DB::table('medidas')->insert([
        'descripcion' => 'Antivirus en terminales de usuarios',
        'tipoMedida' => 'Preventiva',
        'amenazaId' => 10,
      ]);
    }
}
