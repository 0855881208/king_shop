<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    use HasFactory;

    protected $table = 'cart_item';

    protected $fillable = [
        'product_id',
        'cart_id',
        'price',
        'quantity',
        'total',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
