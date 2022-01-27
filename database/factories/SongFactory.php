<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker -> name(),
            'duration' => $this->faker -> numberBetween(30, 600),
            'lyric' => $this->faker -> text(300),
            'price' => $this->faker -> numberBetween(500, 10000),
            'genre' => $this->faker->word(),
            'rating' => $this->faker -> numberBetween(0, 10),
            'explicit' => $this->faker->boolean(),
            'single' => $this->faker->boolean()
        ];
    }
}