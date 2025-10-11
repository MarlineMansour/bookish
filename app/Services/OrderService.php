<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Book;
use Illuminate\Support\Facades\DB;
use App\Services\AddressService;
use App\Services\ShippingInfoService;   
use App\Services\OrderDetailsService;
use Illuminate\Support\Facades\Auth;
use Exception;

class OrderService
{


    protected $addressService;
    protected $shippingInfoService;
    protected $orderDetailsService;

    public function __construct(AddressService $addressService, ShippingInfoService $shippingInfoService, OrderDetailsService $orderDetailsService)
    {
        $this->addressService = $addressService;
        $this->shippingInfoService = $shippingInfoService;
        $this->orderDetailsService = $orderDetailsService;
    }
   

    public function createOrder(array $orderData)
    {
       
    try
    { 
         DB::beginTransaction();
        $book_array = $orderData['book_id'];
        $count_array = $orderData['book_count'];

        $total_quantity = 0;
        $total_price = 0;

        $order_details = [];

        $orderData['user_id']=Auth::user()->id;
// //             dd($request->all());
        foreach ($book_array as $key => $book) {

            $book_price = floatval(Book::query()->where('id', $book)->pluck('price')->first());
            $quantity = intVal($count_array[$key]);
            $item_price = $book_price * $quantity;
            $order_details[] = [
                'book_id' => $book,
                'quantity' => $quantity,
                'price' => $item_price,
            ];

            $total_quantity += $quantity;
            $total_price += $item_price;
        }
        $address = $this->addressService->createAddress([
            'address' => $orderData['address'],
            'city' => $orderData['city'],
            'zone' => $orderData['zone'],
            'phone' => $orderData['phone'],
        ]);

        $shipping = $this->shippingInfoService->createShippingInfo([
            'address_id' => $address->id,
            'payment_method' => $orderData['payment_method'],
            'user_id' => $orderData['user_id']
        ]);
        $order = Order::create([
            'total_price' => $total_price,
            'total_quantity' => $total_quantity,
            'user_id' =>  $orderData['user_id'],
            'shipping_id' => $shipping->id,
        ]);
        

        foreach ($order_details as $user_order) {
            $this->orderDetailsService->createOrderDetails([
                'order_id' => $order->id,
                'book_id' => $user_order['book_id'],
               'quantity' => $user_order['quantity'],
                'price' => $user_order['price'],
            ]);
        }
         DB::commit();
        return $order;
    }
    catch (Exception $ex) {
        DB::rollBack();
        throw $ex;
    }
}

}