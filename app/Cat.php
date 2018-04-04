<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    //

    protected $fillable = [

        'subject_id', 'tTotal','tScore', 'cat_name'
    ];
}
