<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Councillor>
 */
class CouncillorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstName = fake()->firstName();
        $lastName = fake()->lastName();

        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'phone_number' => fake()->mobileNumber(),
            'email' => $lastName.'.'.$firstName.'@mail.com',
            'slug' => strtolower(Str::slug($firstName.' '.$lastName, '-')),
            'about' => fake()->paragraphs(5, true),
            'avatar' => 'default.jpg',
            'political_party_id' => rand(1,5),
            'portfolio_id' => 1,
        ];
    }
}
