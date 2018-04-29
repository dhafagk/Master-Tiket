<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservation';
    public $timestamps = false;

    public function users(){
      return $this->belongsTo('App\User','userid','id');
    }

    public function rute(){
      return $this->belongsTo('App\Rute','ruteid','id');
    }

    public function customer(){
      return $this->belongsTo('App\Customer','customerid','id');
    }

}
