<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $fillable = [
        'shipping_address',
        'shipping_date',
        'shipping_status',
        'order_id'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
