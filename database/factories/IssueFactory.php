<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Page>
 */
class IssueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(2, true),
            'email' => fake()->email(),
            'phone' => fake()->mobileNumber(),
            'subject' => fake()->words(2, true),
            'message' => fake()->paragraphs(3, true),
        ];
    }
}
