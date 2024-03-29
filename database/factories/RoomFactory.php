<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hotelId' => $this->faker->numberBetween(1, 5),
            'roomNumber' => $this->faker->numberBetween(100, 200),
            'capacity' => $this->faker->numberBetween(1, 4),
            'price' => $this->faker->numberBetween(50, 150),
        ];
    }
}
