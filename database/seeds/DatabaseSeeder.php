<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(MatrizRiesgosTableSeeder::class);
        // $this->call(MedidasTableSeeder::class);
        // $this->call(InventariosTableSeeder::class);
        // $this->call(ActivosTableSeeder::class);
        // $this->call(AmenazasTableSeeder::class);
    }
}
