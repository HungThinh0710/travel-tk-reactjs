<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table ='staff';

    protected $fillable = ['username', 'email', 'password', 'socials_url', 'roles'];

    public function news()
    {
        return $this->hasMany('App\News', 'author_id', 'id');
    }

    public function roles()
    {
        return $this->hasOne('App\Role','id', 'roles');
    }
}
