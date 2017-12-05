<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
  protected $table = 'application';
  protected $primaryKey = 'id_application';
  protected $connection = 'mysql';
  protected $visible = array('id_application','description','token');
  public $timestamps = false;

  public function users(){
    return $this->belongsToMany('App\User','user_has_application','id_application','id_user');
  }

  public function global_roles(){
    return $this->belongsToMany('App\GlobalRole','global_role_has_application','id_application','id_global_role');
  }

  public function roles(){
    return $this->hasMany('App\Role','id_application','id_application');
  }

  public function permissions(){
    return $this->hasMany('App\Permission','id_application','id_application');
  }

  public function activities(){
    return $this->hasMany('App\Activity','id_application','id_application');
  }

}
