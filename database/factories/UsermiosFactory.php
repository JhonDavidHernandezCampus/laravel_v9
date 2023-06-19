<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usermios>
 */
class UsermiosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'edad'   => $this->faker->numberBetween(15,80),
            'f_nacimiento' => $this->faker->date,
            'cargo' => $this->faker->text(50),
            'email' => $this->faker->unique()->safeEmail(),
        ];
    }
}
