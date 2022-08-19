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
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(10),
            'quantity' => $this->faker->numberBetween(10, 20),
            'price' => $this->faker->numberBetween(10000, 100000)
        ];
    }
}
