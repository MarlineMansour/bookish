<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'total_price',
        'total_quantity',
        'user_id',
        'shipping_id',
    ];
    public function OrderUser(){
      return  $this->belongsTo(User::class,'user_id');
    }
    public function OrderShippingInfo(){
        return $this->belongsTo(ShippingInfo::class,'shipping_id');
    }
}
