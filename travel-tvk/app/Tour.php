<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table = 'tour';

    protected $fillable = ['name', 'desc', 'price', 'address', 'status', 'start_time', 'end_time', 'types', 'services', 'imgs_path'];

    public function members()
    {
        return $this->belongsToMany('App\User','book_tours', 'tour_id', 'user_id');
    }
}
