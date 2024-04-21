<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }


    public function items()
    {
        return $this->belongsToMany(Item::class, 'order_details');
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
