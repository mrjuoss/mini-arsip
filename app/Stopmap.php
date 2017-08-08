<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stopmap extends Model
{
  public function details()
  {
    return $this->hasMany('App\Detail');
  }
}
