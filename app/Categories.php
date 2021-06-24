<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    public $timesstamps = false;

    protected $fillable = [
        'name'
    ];
}
