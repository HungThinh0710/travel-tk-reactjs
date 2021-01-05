<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = ['roles_name'];

    public function users()
    {
        return $this->belongsTo('App\Staff', 'roles', 'id');
    }
}
