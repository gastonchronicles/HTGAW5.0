<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    //
//    protected $primaryKey = 'id';
//
    public function user(){
        return $this->belongsTo('App\User', 'user_id');

    }
    public function subjecting(){
        return $this->belongsTo('App\Rating','subject_id');
    }

    protected  $fillable =[
      'user_id', 'subject_id', 'name',
    ];

}
