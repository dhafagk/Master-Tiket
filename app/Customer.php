<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    public $timestamps = false;

    public function reservation(){
      return $this->hasMany('App\Reservation');
    }

}
