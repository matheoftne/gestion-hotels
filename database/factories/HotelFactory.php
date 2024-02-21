<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hotel>
 */
class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'adress' => $this->faker->city(),
            'stars' => $this->faker->numberBetween(1, 5),
            'email' => $this->faker->unique()->safeEmail(),
            'telephone' => $this->faker->e164PhoneNumber(),
        ];
    }
}
