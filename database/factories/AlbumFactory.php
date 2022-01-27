<?php

namespace Database\Factories;

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
        return [
            'title' => $this->faker -> name(),
            'price' => $this->faker -> numberBetween(500, 10000),
            'genre' => $this->faker->word(),
            'bio' => $this->faker -> text(600),
            'date' => $this->faker -> date('d_m_Y'),
        ];
    }
}
