<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddQuestion extends Model
{
    protected $fillable = [
        'question', 'query1', 'query2', 'query3', 'query4', 'ans','link',
    ];
}
