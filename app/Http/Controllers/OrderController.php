<?php

namespace App\Http\Controllers;

use App\Models\AddressBook;
use App\Models\Book;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\ShippingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\Cast\Int_;

class OrderController extends Controller
{
    public function index(Request $request)
    {
//             dd($request->all());
        $book_array = $request['book_id'];
        $count_array = $request->book_count;

        $total_quantity = 0;
        $total_price = 0;
        $order_details = [];
        foreach ($book_array as $key => $book) {
//            dd($book_array[$key] , $count_array[$key]);
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
//           dd($order_details);

        $address = AddressBook::create([
            'address' => $request->address,
            'city' => $request->city,
            'zone' => $request->zone,
            'phone' => $request->phone,
        ]);

        $shipping = ShippingInfo::create([
            'address_id' => $address->id,
            'payment_method' => $request->payment_method,
            'user_id' => Auth::user()->id,
        ]);
        $order = Order::create([
            'total_price' => $total_price,
            'total_quantity' => $total_price,
            'user_id' => Auth::user()->id,
            'shipping_id' => $shipping->id,
        ]);
        $order_id = $order->id;
        foreach ($order_details as $user_order) {
//              dd($user_order);
            OrderDetails::create([
                'price' => $user_order['price'],
                'quantity' => $user_order['quantity'],
                'book_id' => $user_order['book_id'],
                'order_id' => $order->id,
            ]);
        }
        return view('order', compact('order_id', 'total_price', 'total_quantity'));
    }

}
