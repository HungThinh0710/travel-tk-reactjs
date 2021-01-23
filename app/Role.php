<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['roles_name'];

//    public function users()
//    {
//        return $this->belongsTo('App\Staff', 'id', 'roles');
//    }

    public function users()
    {
        return $this->hasMany('App\Staff','role_id');
    }
}
