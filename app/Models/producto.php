<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = [
        "negocio_id","categoria_id","name","description","price","image",
    ];
}