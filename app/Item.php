<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'seller_id', 'category_id', 'itemsname', 'itemsprice', 'itemsdescription', 'itemsimage'
    ];
    public $timestamps = false;
}
