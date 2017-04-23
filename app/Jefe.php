<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jefe extends Model
{
   protected $table = "jefe";

   public function pais(){
        return $this->belongsTo(Pais::Class);
    }
}
