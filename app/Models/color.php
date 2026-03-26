<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    protected $table = "colores";
    protected $fillable = [
        "c1","c2","c3",
    ];
}