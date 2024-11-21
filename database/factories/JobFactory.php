<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['$50,000 USD', '$100,000 USD', '$200,000 USD, $250,000 USD']),
            'location' => 'Remote',
            'schedule' => 'Full Time',
            'url'  => fake()->url(),
            'featured' => 'false'
        ];
    }
}
