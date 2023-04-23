<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\client>
 */
class clientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'num_cin' => $this->faker->unique()->randomNumber(8),
        'nom' => $this->faker->lastName(),
        'prenom' => $this->faker->firstName(),
        // la date de naissance devrait avoir une valeur de sorte que l'âge du client soit supérieur à 18 ans
        'date_naiss' => $this->faker->dateTimeBetween('-70 years', '-18 years'),
        'lieu_naiss' => $this->faker->city(),
        'adresse' => $this->faker->address(),
        'nationalite' => $this->faker->country(),
        'num_tel' => $this->faker->phoneNumber(),
        'email' => $this->faker->unique()->safeEmail(),
        'sexe' => $this->faker->randomElement(['H', 'F']),
        ];
    }
}
