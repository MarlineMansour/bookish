<?php
namespace App\Services;
use App\Models\OrderDetails;


class OrderDetailsService
{   
public function createOrderDetails(array $orderDetailsData)
{
    $orderDetails = OrderDetails::create($orderDetailsData);
    return $orderDetails;
}   
}