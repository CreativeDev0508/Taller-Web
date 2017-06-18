<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Top extends Model
{
    protected $table = "top";

       protected $fillable = [
        'usuario', 'puntaje', 'updated_at', 'created_at', 'criminalesCapturados'
    ];
}
