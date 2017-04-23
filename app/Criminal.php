<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criminal extends Model
{
   protected $table = "criminal";

   public function pais(){
        return $this->belongsTo(Pais::Class);
    }
}
