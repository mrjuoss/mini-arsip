<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
  public function details()
  {
    return $this->hasMany('App\Detail');
  }
}
