<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $images = ['e1.jpg','e2.jpg','e3.jpg','e4.jpg','e5.jpg','e6.jpg','e7.jpg','e8.jpg','e9.jpg'];
        return [
            'name' => $this->faker->name,
            'image' => $this->faker->randomElement($images),
            'bio' => $this->faker->sentence(rand(15, 40))
        ];
    }
}
