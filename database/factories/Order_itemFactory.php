<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class Order_itemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(1, 10000),
            'quantity' => $this->faker->numberBetween(1, 100),
            'product_id' => $this->faker->numberBetween(1, 10000),
            'order_id' => $this->faker->numberBetween(1, 1000),
            'created_at' => $this->faker->dateTimeBetween('-4 months', 'now', null),
            'updated_at' => $this->faker->dateTimeBetween('-4 months','now', null)
        ];
    }
}
