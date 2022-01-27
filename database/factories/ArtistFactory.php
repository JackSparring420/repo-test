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
        return [
            'nome' => $this->faker -> name(),
            'cognome' => $this->faker -> name(),
            'nome-artista' => $this->faker -> date('d_m_Y'),
            'anno-nascita' => $this->faker -> date('d_m_Y'),
            'genre' => $this->faker->word(),
            'inizio-carriera' => $this->faker -> date('d_m_Y'),
            'instagram' => $this->faker->word(),
            'mail' => $this->faker->email()
        ];
    }
}
