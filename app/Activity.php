<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
  protected $table = 'activity';
  protected $primaryKey = 'id_activity';
  protected $connection = 'mysql';
  protected $visible = array('id_activity','url','id_application');
  public $timestamps = false;

  public function permissions(){
    return $this->belongsToMany('App\Permission','permission_has_activity','id_activity','id_permission');
  }

  public function application(){
    return $this->belongsTo('App\Application','id_application','id_application');
  }

  public function method(){
    return $this->belongsTo('App\Method','id_method','id_method');
  }
  
}
