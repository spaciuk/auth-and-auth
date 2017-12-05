<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  protected $table = 'user';
  protected $primaryKey = 'id_user';
  protected $connection = 'mysql';
  protected $visible = array('id_user','name','full_name','email');
  protected $hidden = array('password');
  public $timestamps = false;

  public function roles(){
    return $this->belongsToMany('App\Role','user_has_role','id_user','id_role');
  }

  public function global_roles(){
    return $this->belongsToMany('App\GlobalRole','user_has_global_role','id_user','id_global_role');
  }

  public function applications(){
    return $this->belongsToMany('App\Application','user_has_application','id_user','id_application');
  }

}
