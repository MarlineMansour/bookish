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
            'total_price'=>fake()->randomDigitNotNull(3),
            'total_quantity'=>fake()->numberBetween(1,200),
            'user_id' => User::inRandomOrder()->first()->id,
            'shipping_id'=>ShippingInfo::inRandomOrder()->first()->id,

        ];
    }
}
