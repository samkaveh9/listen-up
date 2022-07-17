<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class MusicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = ['a1.jpg','a2.jpg','a3.jpg','a4.jpg','a5.jpg','a6.jpg','a7.jpg','a8.jpg','a9.jpg','a10.jpg','a11.jpg'];
        return [
            'title' => $this->faker->sentence(rand(1,7)),
            'content' => $this->faker->text,
            'artist_id' => Artist::all()->random()->id,
            'image' => $this->faker->randomElement($images),
            'file' => "20220501081116.mp3"
        ];
    }
}
