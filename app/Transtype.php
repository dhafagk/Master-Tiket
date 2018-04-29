<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transtype extends Model
{
    protected $table = 'transtype';
    public $timestamps = false;

    public function trans(){
      return $this->hasMany('App\Trans');
    }

}
