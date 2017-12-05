<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
  protected $table = 'method';
  protected $primaryKey = 'id_method';
  protected $connection = 'mysql';
  protected $visible = array('id_method','description');
  public $timestamps = false;

  public function activities(){
    return $this->hasMany('App\Activity','id_method','id_method');
  }
  
}
