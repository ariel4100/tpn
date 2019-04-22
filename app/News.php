<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class News extends Model
{
    protected $fillable = [
        'title', 'text', 'subtitle','order','image','video','destacado','categories_id'
    ];

    public function Category(){
        return $this->belongsTo('App\Category','categories_id');
    }
}
