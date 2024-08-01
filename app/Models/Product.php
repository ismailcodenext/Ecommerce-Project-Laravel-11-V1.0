<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'bd_price',
        'usd_price',
        'product_code',
        'description',
        'stock',
        'status',
        'img_url',
        'user_id',
    ];

}
