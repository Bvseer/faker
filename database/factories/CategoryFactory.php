<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
            'created_at' => $this->faker->dateTimeBetween('-4 months', 'now', null),
            'updated_at' => $this->faker->dateTimeBetween('-4 months','now', null)
        ];
    }
}
