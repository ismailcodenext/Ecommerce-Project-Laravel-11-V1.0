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
        'category_id',
        'brand_id',
        'user_id'
    ];



    // Relationship with Category
    public function category()
    {
        return $this->belongsTo(Categories::class);
    }

    // Relationship with Brand
    public function brand()
    {
        return $this->belongsTo(Brands::class);
    }




}
