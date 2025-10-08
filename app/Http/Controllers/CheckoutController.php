<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetails;
use Illuminate\Http\Request;
use function Illuminate\Session\userAgent;

class CheckoutController extends Controller
{
   public function index(){
       return view('checkout');
   }
   public function ShowPurchasedProduct(){
      return view('checkout') ;
   }

}
