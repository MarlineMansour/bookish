<?php

namespace Database\Factories;


use App\Models\ShippingInfo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'total_price'=>fake()->randomNumber(3),
            'total_quantity'=>fake()->numberBetween(1,30),
            'user_id' =>'1',
            'shipping_id'=>fake()->numberBetween(1,10),

        ];
    }
}
