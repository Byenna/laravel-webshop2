<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class ProductCategory extends Model
{
    use HasFactory;
    use softDeletes;
    protected $fillable = [
        'name',
    ];
    
    protected $table = 'product_categories';

    protected $guarded = [
        'id',
    ];

}
