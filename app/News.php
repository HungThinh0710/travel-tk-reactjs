<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = ['category_id', 'title', 'content', 'tags', 'author_id'];

    public function category()
    {
        return $this->belongsTo('App\Category','category_id');
    }

    public function author()
    {
        return $this->belongsTo('App\Staff', 'author_id');
    }
}
