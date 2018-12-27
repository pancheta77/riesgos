<?php

use Illuminate\Database\Seeder;

class ActivosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('activos')->truncate();

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'Desarrolladores',
        'descripcion' => 'Miembros del equipo de desarrollo',
        'responsable' => 'Director Sistemas',
        'ubicacion' => 'Casa Central',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'Muebles y utiles',
        'descripcion' => 'Insumos de oficina',
        'responsable' => 'Director General',
        'ubicacion' => 'Casa Central',
        'critico' => 'No',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 2,
        'nombre' => 'Muebles y utiles',
        'descripcion' => 'Insumos de oficina',
        'responsable' => 'Director General',
        'ubicacion' => 'Casa Central',
        'critico' => 'No',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'Computadora',
        'descripcion' => 'PC de Escritorio',
        'responsable' => 'Dto. Compras',
        'ubicacion' => 'Casa Central',
        'critico' => 'No',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'Servidor 1',
        'descripcion' => 'Servidor para proveer servicio',
        'responsable' => 'Gerente Sistemas',
        'ubicacion' => 'CPD - Casa Central',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 2,
        'nombre' => 'Servidor 1',
        'descripcion' => 'Servidor para proveer servicio',
        'responsable' => 'Gerente Sistemas',
        'ubicacion' => 'CPD - Casa Central',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 2,
        'nombre' => 'Impresoras',
        'descripcion' => 'Impresoras laser',
        'responsable' => 'Gerente Sistemas',
        'ubicacion' => 'Oficinas - Casa Central',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'Red alámbrica',
        'descripcion' => 'Red cableada',
        'responsable' => 'Gerente Infraestructura',
        'ubicacion' => 'Casa Central',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 2,
        'nombre' => 'Red inalámbrica',
        'descripcion' => 'Red Wifi / AP',
        'responsable' => 'Gerente Infraestructura',
        'ubicacion' => 'Oficina Central',
        'critico' => 'No',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'SO Linux',
        'descripcion' => 'Soft Linux Server',
        'responsable' => 'Gerente Sistemas',
        'ubicacion' => 'Casa Central',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 2,
        'nombre' => 'SO Linux',
        'descripcion' => 'Soft Linux Server',
        'responsable' => 'Gerente Sistemas',
        'ubicacion' => 'Casa Central',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'SO Windows Server',
        'descripcion' => 'Windows Server',
        'responsable' => 'Gerente Sistemas',
        'ubicacion' => 'Casa Central',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'SO Windows Desktop',
        'descripcion' => 'Windows PCs escritorio',
        'responsable' => 'Soporte',
        'ubicacion' => 'Casa Central',
        'critico' => 'No',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'BD Oracle',
        'descripcion' => 'Motor Base de Datos',
        'responsable' => 'Gerente Sistemas',
        'ubicacion' => 'Casa Central',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'Software Aplicación',
        'descripcion' => 'Software desarrollado operativo',
        'responsable' => 'Gerente Sistemas',
        'ubicacion' => 'Casa Central',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 2,
        'nombre' => 'Facturas impresas',
        'descripcion' => 'Facturas impresas de clientes',
        'responsable' => 'Gerente Comercial',
        'ubicacion' => 'Dto. Comercial',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'Informes',
        'descripcion' => 'Informes impresos internos',
        'responsable' => 'Gerente General',
        'ubicacion' => 'Casa Central',
        'critico' => 'No',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 1,
        'nombre' => 'Backup',
        'descripcion' => 'Respaldos de datos',
        'responsable' => 'Gerente Sistemas',
        'ubicacion' => 'Casa Central',
        'critico' => 'Si',
      ]);

      DB::table('activos')->insert([
        'empresaId' => 2,
        'nombre' => 'Backup',
        'descripcion' => 'Respaldos de datos',
        'responsable' => 'Gerente Sistemas',
        'ubicacion' => 'Casa Central',
        'critico' => 'Si',
      ]);
    }
}
