<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
  protected $guarded = [];

  public function empresa(){
    return $this->belongsTo(Empresa::class, 'empresaId');
  }

  
}
