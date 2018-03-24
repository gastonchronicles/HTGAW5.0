<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{

    protected $primaryKey = 'rating_id';



    public function user(){
        return $this->belongsTo('App\User');
    }



    protected $fillable = [

        'category', 'percentage','subject_id'
    ];

    public function subjects(){
        return $this->hasMany('App\Subject');
    }
}
