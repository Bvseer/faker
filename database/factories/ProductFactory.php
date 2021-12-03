<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(1, 10000),
            'category_id' => $this->faker->numberBetween(1, 50),
            'brand_id' => $this->faker->numberBetween(1, 30),
            'created_at' => $this->faker->dateTimeBetween('-4 months', 'now', null),
            'updated_at' => $this->faker->dateTimeBetween('-4 months','now', null)
        ];
    }
}
