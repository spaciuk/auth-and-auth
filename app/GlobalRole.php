<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GlobalRole extends Model
{
  protected $table = 'global_role';
  protected $primaryKey = 'id_global_role';
  protected $connection = 'mysql';
  protected $visible = array('id_global_role','description');
  public $timestamps = false;

  public function users(){
    return $this->belongsToMany('App\User','user_has_global_role','id_global_role','id_user');
  }

  public function applications(){
    return $this->belongsToMany('App\Application','global_role_has_application','id_global_role','id_application');
  }

  public function roles(){
    return $this->belongsToMany('App\Role','global_role_has_role','id_global_role','id_role');
  }

}
