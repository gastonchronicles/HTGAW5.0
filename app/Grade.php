<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //
    protected $primaryKey = 'id';



    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = [

        'subject_id','standing_id','category', 'score','total', 'user_id'
    ];

    public function subjects(){
        return $this->hasMany('App\Subject');
    }

}
