<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rute extends Model
{
    protected $table = 'rute';
    public $timestamps = false;

    public function reservation(){
      return $this->hasMany('App\Reservation');
    }

    public function trans(){
      return $this->belongsTo('App\Trans','transportationid','id');
    }

}
