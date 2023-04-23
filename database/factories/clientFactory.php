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
        'date_naiss' => $this->faker->date(),
        'adresse' => $this->faker->address(),
        'nationalite' => $this->faker->country(),
        'num_tel' => $this->faker->phoneNumber(),
        'email' => $this->faker->unique()->safeEmail(),
        'sexe' => $this->faker->randomElement(['H', 'F']),
        ];
    }
}
