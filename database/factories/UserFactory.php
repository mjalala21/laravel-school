<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_name' => fake()->name(),
            'course' => fake()->randomElement(['Physics','chemistry','biology','mathematics']),
            'student_gender' => fake()->randomElement(['male','female']),
            'stuent_address' => fake()->address(),

            'email' => fake()->unique()->safeEmail(),
            'password'=>bcrypt('123456'),
            'student_date_of_birth' =>fake()->date($format='Y-m-d', $max='now'),
            'teacher_name' => fake()->name(),
            'subject_assigned' => fake()->randomElement(['Physics','chemistry','biology','mathematics']),
            'teacher_address' => fake()->address(),

            'teacher_date_of_birth' =>fake()->date($format='Y-m-d', $max='now'),
            'teacher_joinig_date' =>fake()->date($format='Y-m-d', $max='now'),
 
 
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
   
}
