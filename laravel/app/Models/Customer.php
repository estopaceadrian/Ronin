<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    //Table name
    protected $table = 'customer';
    public $customers = ['Email','FirstName', 'LastName'];
}
