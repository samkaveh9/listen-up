<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
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
            'artist_id' =>  Artist::all()->random()->id,
            'title' => $this->faker->title,
            'image' => $this->faker->randomElement($images),
            'content' => $this->faker->sentence(rand(30, 50))
        ];
    }
}
