<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';

    protected $fillable = ['name, desc, price, address, status, start_time, end_time, types, services, imgs_path, email_verified_at, password'];

    public function members()
    {
        return $this->belongsToMany('App\User','tour_member', 'tour_id', 'member_id');
    }
}
