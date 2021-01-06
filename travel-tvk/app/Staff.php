<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table ='staff';

    protected $fillable = ['username', 'email', 'password', 'socials_url', 'role_id'];

    public function news()
    {
        return $this->hasMany('App\News', 'author_id', 'id');
    }

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }

}
