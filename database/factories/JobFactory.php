<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title'=> fake()->jobTitle,
            'salary'=> fake()->randomElement(['100 000F CFA, 150 000F CFA, 200 000F CFA']),
            'location'=> 'Remote',
            'contrat'=> 'Full Time',
            'url'=> fake()->url,
            'feactured'=> false,

        ];
    }
}
