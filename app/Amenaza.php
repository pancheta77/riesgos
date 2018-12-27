<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Amenaza extends Model
{
  protected $guarded = [];

  public function activo(){
    return $this->belongsTo(Activo::class, 'activoId');
  }

  public function riesgo(){
    return $this->belongsTo(MatrizRiesgo::class, 'matrizRiesgoId');
}
}
