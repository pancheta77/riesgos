<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->truncate();

      DB::table('users')->insert([
        'name' => 'Administrador',
        'email' => 'admin@seguridad.com',
        'password' => bcrypt ('1234'),
        'remember_token' => str_random(10),
      ]);
    }
}
