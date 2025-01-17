<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id', 'items_id', 'quantity',
    ];
    public $timestamps = false;
}
