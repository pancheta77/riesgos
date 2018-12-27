<?php

use Illuminate\Database\Seeder;

class ValoracionRiesgosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('valoracion_riesgos')->truncate();

      DB::table('valoracion_riesgos')->insert([
        'inventarioId' => 5,
        'amenazaId' => 3,
        'valorImportancia' => 4,
      ]);

      DB::table('valoracion_riesgos')->insert([
        'inventarioId' => 7,
        'amenazaId' => 1,
        'valorImportancia' => 8,
      ]);

      DB::table('valoracion_riesgos')->insert([
        'inventarioId' => 7,
        'amenazaId' => 2,
        'valorImportancia' => 4,
      ]);

      DB::table('valoracion_riesgos')->insert([
        'inventarioId' => 7,
        'amenazaId' => 8,
        'valorImportancia' => 7,
      ]);

      DB::table('valoracion_riesgos')->insert([
        'inventarioId' => 4,
        'amenazaId' => 4,
        'valorImportancia' => 3,
      ]);

      DB::table('valoracion_riesgos')->insert([
        'inventarioId' => 7,
        'amenazaId' => 7,
        'valorImportancia' => 6,
      ]);
    }
}
