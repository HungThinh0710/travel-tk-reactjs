<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookTour extends Model
{
    protected $table = 'book_tours';

    protected $fillable = ['tour_id', 'user_id', 'status', 'is_paid', 'notes'];


}
