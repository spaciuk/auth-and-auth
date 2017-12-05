<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
  protected $table = 'permission';
  protected $primaryKey = 'id_permission';
  protected $connection = 'mysql';
  protected $visible = array('id_permission','description','id_application');
  public $timestamps = false;

  public function roles(){
    return $this->belongsToMany('App\Role','role_has_permission','id_permission','id_role');
  }

  public function application(){
    return $this->belongsTo('App\Application','id_application','id_application');
  }

  public function activities(){
    return $this->belongsToMany('App\Activity','permission_has_activity','id_permission','id_activity');
  }

}
