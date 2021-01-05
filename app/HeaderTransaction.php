<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeaderTransaction extends Model
{
    protected $fillable = [
        'user_id'
    ];

    public $table = 'headertransactions';
}
