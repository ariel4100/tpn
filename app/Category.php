<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title','order',
    ];
    public function news(){
        return $this->hasMany('App\News','categories_id');
    }
}
