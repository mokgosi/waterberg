<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CommitteeCouncillors>
 */
class CommitteeCouncillorsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //committees 12, concillors 10
        return [
            // 'councillor_id' => rand(1,10),
            // 'committee_id' => rand(1,12),
        ];
    }
}
