<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    protected $table = "orden";

    public function users(){
        return $this->belongsTo(User::Class);
    }

    public function pais(){
        return $this->belongsTo(Pais::Class);
    }
}
