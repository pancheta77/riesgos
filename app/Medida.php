<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    protected $guarded = [];

    public function amenaza(){
      return $this->belongsTo(Amenaza::class, 'amenazaId');
  }
}
