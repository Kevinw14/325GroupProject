<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class CartItem extends Model
{
    use HasFactory;

    public $fillable = ['user_id', 'product_id', 'quantity'];
    public $timestamps = false;

    /**
     * 
     */
    public function product() {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
