<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenazasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amenazas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activoId');
            $table->string('detalle');
            $table->enum('probabilidad', ['Baja', 'Media', 'Alta'])->default('Baja');
            $table->enum('impacto', ['Bajo', 'Medio', 'Alto'])->default('Bajo');
            $table->unsignedInteger('matrizRiesgoId');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amenazas');
    }
}
