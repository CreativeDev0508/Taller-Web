<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criminal extends Model
{
   protected $table = "criminal";




   public function pais(){
        return $this->belongsTo(Pais::Class);
    }

    public function sexo(){
        return $this->belongsTo(Sexo::Class);
    }

    public function tez(){
        return $this->belongsTo(Tez::Class);
    }

    public function pelo(){
        return $this->belongsTo(Tez::Class);
    }

    public function distintivo(){
        return $this->belongsTo(Distintivo::Class);
    }
}
