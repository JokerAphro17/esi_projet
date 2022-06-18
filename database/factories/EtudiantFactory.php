<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EtudiantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'matricule' => $this->faker->unique()->randomNumber(8),
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->firstName(),
            'email' => $this->faker->unique()->safeEmail(),
            'cycle' => $this->faker->randomElement(['Licence','Licence']),
            'niveau' => $this->faker->randomElement(['L1', 'L2', 'L3']),
            'annee' => $this->faker->randomElement(['2018-2019', '2019-2020', '2020-2021']),
            'photo' => $this->faker->imageUrl(300, 300, 'people'),
        ];
    }
}
