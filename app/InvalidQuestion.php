<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvalidQuestion extends Model
{
    protected $fillable = [
        'q_id', 'question', 'ans', 'date',
    ];
}
