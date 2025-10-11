<?php

namespace App\Services;

use App\Models\AddressBook;

class AddressService
{
   
   public function createAddress(array $addressData)
   {

        $address= AddressBook::create($addressData);

        return $address;
    }
}

       

    
