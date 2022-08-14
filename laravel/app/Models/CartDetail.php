<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;

    
    //Table name
    protected $table = 'cart';
    
    protected $fillable = ['Product_ID', 'ProductName', 'stock', 'price', 'discount', 'type', 'image'];
    
    public $timestamps = false; 
}
