<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Career>
 */
class CareerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->words(3, true);

        return [
            'title' => $title,
            'slug' => strtolower(Str::slug($title, '-')),
            'offer' => 'default',
            'file_name' => 'default',
            'contract_type_id' => 1,
            'content' => fake()->paragraphs(5, true),
        ];
    }
}
