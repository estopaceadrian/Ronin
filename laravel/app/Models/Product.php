<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //Table Name 
    protected $table = 'product';
    public $items = ['Name', 'Stock', 'Price', 'Discount', 'Type' , 'img' ];
 
 

   
    
}

