<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class OrderItem extends Model
{
    use HasFactory;
    public $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price'
    ];
    public $timestamps = false;

    /**
     * 
     */
    public function product() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
