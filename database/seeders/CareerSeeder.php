<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Career;
use Illuminate\Support\Str;

class CareerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = fake()->words(3, true);

        Career::factory(10)->create([
            'title' => $title,
            'slug' => strtolower(Str::slug($title, '-')),
            'offer' => 'default',
            'file_name' => 'default',
            'contract_type_id' => 1,
            'content' => fake()->paragraphs(5, true),
        ]);
    }
}
