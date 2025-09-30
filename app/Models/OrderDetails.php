<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    use HasFactory;
    protected $fillable =[
        'price',
        'quantity',
        'order_id',
        'book_id',
    ];
    public function OrderDetails(){
        return $this->belongsTo(Order::class,'order_id');
    }
    public function OrderBook(){
        return $this->hasMany(Book::class,'book_id');
    }
}
