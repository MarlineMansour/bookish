<?php
namespace App\Services;
use App\Models\ShippingInfo;

class ShippingInfoService
{
    public function createShippingInfo(array $shippingData)
    {
        $shipping = ShippingInfo::create($shippingData);
        return $shipping;
    }
}
