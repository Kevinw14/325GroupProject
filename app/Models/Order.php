<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Order extends Model
{
    use HasFactory;
    public $fillable = [
        'user_id',
        'total'
    ];

    /**
     * 
     */
    public function order_items() {
        return $this->hasMany(OrderItem::class, 'order_id', 'id');
    }

    /**
     * 
     */
    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
