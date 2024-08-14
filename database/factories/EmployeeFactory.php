<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'age' => fake()->numberBetween(18,65),
            'gender' => fake()->randomElement(['M', 'F']),
            'email' => fake()->unique()->safeEmail(),
            'position' => fake()->randomElement(['Administrador', 'Líder', 'Auxiliar']),
        ];
    }
}
