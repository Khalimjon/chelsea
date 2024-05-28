<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'photo' => 'photos/' . $this->faker->image('storage/app/public/photos', 640, 480, null, false),
            'age' => $this->faker->numberBetween(18, 40),
            'shirt_number' => $this->faker->numberBetween(1, 99),
            'position' => $this->faker->randomElement(['Forward', 'Midfielder', 'Defender', 'Goalkeeper']),
            'describtion' => $this->faker->sentence(),
        ];
    }
}
