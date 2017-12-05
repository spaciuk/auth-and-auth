<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  protected $table = 'role';
  protected $primaryKey = 'id_role';
  protected $connection = 'mysql';
  protected $visible = array('id_role','description','id_application');
  public $timestamps = false;

  public function users(){
    return $this->belongsToMany('App\User','user_has_role','id_role','id_user');
  }

  public function global_roles(){
    return $this->belongsToMany('App\GlobalRole','global_role_has_role','id_role','id_global_role');
  }

  public function application(){
    return $this->belongsTo('App\Application','id_application','id_application');
  }

  public function permissions(){
    return $this->belongsToMany('App\Permission','role_has_permission','id_role','id_permission');
  }

}
