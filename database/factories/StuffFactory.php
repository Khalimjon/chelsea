<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stuff>
 */
class StuffFactory extends Factory
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
            'age' => $this->faker->numberBetween(18, 65),
            'position' => $this->faker->randomElement([ 'vitse Coach', 'Doctor', 'Coach']),
            'describtion' => $this->faker->sentence(),
        ];
    }
}
