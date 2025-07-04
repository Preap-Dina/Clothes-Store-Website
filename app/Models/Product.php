<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'qty',
        'regular_price',
        'sale_price',
        'color',
        'size',
        'image',
        'description',
        'cate_id',
        'user_id'
    ];
}
