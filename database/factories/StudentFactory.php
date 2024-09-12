<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
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
            'course_name' => fake()->randomElement(['Physics','chemistry','biology','mathematics']),
            'gender' => fake()->randomElement(['male','female']),
            'address' => fake()->address(),

            'email' => fake()->unique()->safeEmail(),
            'date_of_birth' =>fake()->date($format='Y-m-d', $max='now'),
 
        ];
    }
}
