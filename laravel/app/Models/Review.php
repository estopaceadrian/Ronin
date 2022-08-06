<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'review';
    public $reviews = ['Review_id', 'Comment'];
}
