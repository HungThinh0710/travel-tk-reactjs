<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Staff extends Authenticatable
{
    use Notifiable;

    protected $guarded = 'admin';

    protected $table ='staff';

    protected $fillable = ['username', 'email', 'password', 'socials_url', 'role_id'];

    protected $hidden = [
        'password',
    ];
    public function news()
    {
        return $this->hasMany('App\News', 'author_id', 'id');
    }

    public function role()
    {
        return $this->belongsTo('App\Role', 'role_id', 'id');
    }

}
