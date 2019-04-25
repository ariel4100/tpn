<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    protected $fillable = [
        'seccion', 'keyword', 'descripcion','url'
    ];
}
