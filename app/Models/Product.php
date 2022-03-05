<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'product_image',
        'product_description',
        'product_info',
        'product_price',
        'product_vat',
        'product_stock',
        
    ];

    protected $table = 'products';

    protected $guarded = [
        'id',
    ];

}
