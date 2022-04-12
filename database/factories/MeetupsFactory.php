<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Meetups>
 */
class MeetupsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(25),
            'address' => $this->faker->address,
            'image' => $this->faker->imageUrl,
            'description' => $this->faker->text,
        ];
    }
}
