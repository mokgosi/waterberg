<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Councillor;
use Illuminate\Support\Str;


class CouncillorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $firstName = fake()->firstName();
        $lastName = fake()->lastName();

        Councillor::factory(10)->create([
            'first_name' =>$firstName,
            'last_name' => $lastName,
            'phone_number' => fake()->mobileNumber(),
            'email' => $lastName.'.'.$firstName.'@mail.com',
            'about' => fake()->paragraphs(5, true),
            'portfolio_id' => '1',
            'political_party_id' => rand(1,3)
        ]);
    }
}
