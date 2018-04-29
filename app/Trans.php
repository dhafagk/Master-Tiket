<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trans extends Model
{
    protected $table = 'transportation';
    public $timestamps = false;

    public function type(){
      return $this->belongsTo('App\Transtype','transportation_typeid','id');
    }

    public function rute(){
      return $this->hasMany('App\Rute');
    }

}
