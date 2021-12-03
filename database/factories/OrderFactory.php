<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'total_amount' => $this->faker->numberBetween(1, 100000),
            'user_id' => $this->faker->numberBetween(1, 500),
            'status' => $this->faker->numberBetween(0, 1),
            'created_at' => $this->faker->dateTimeBetween('-4 months', 'now', null),
            'updated_at' => $this->faker->dateTimeBetween('-4 months','now', null)
        ];
    }
}
