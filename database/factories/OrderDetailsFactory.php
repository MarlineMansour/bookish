<?php

namespace Database\Factories;



use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderDetailsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price'=>fake()->randomNumber(3),
            'quantity'=>fake()->numberBetween(1,3),
            'order_id'=>fake()->numberBetween(1,20),
            'book_id' =>fake()->numberBetween(1,50),
        ];
    }
}
