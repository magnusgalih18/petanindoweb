<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    protected $fillable = [
        'transaction_id', 'items_id', 'quantity',
    ];
    public $timestamps = false;

    public $table = 'detailtransactions';
}
