<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
  protected $guarded = [];


  // Ejercicio Clase 3 2.d
  public function getNombreCompleto() {
    return $this->first_name . " " . $this->last_name;
  }
  
}
