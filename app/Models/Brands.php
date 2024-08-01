<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brands extends Model
{
    use HasFactory;
    protected $fillable = [
        'brand_name',
        'brand_img',
        'user_id',
    ];

    // Relationship with Products
    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
