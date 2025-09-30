<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShippingInfo extends Model
{
    use HasFactory;
   protected $fillable = [
        'payment_method',
        'address_id',
        'user_id',
       ];
   public function UserShippingInfo(){
       return $this->belongsTo(User::class,'user_id');
   }
    public function Address(){
        return $this->belongsTo(AddressBook::class,'address_id');
   }
}
