<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Standing extends Model
{
    //
    public function user(){
        return $this->belongsTo('App\User');
    }

    protected $fillable = [
      'subject_id', 'subject_name', 'user_id', 'overall', 'status'
    ];


}
