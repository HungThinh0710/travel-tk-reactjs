<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = ['title', 'content', 'tags'];

    public function category()
    {
        return $this->belongsTo('App\Category','id');
    }

    public function author()
    {
        return $this->belongsTo('App\Staff', 'id');
    }
}
