<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dokumen extends Model
{
    public function details()
    {
      return $this->hasMany('App\Detail');
    }
}
