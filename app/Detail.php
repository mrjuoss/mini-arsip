<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    public function dokumen()
    {
      return $this->belongsTo('App\Dokumen');
    }

    public function owner()
    {
      return $this->belongsTo('App\Owner');
    }

    public function stopmap()
    {
      return $this->belongsTo('App\Stopmap');
    }
}
