<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TenderCategory;
use Illuminate\Support\Str;

class TenderCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            //about
            'office supplies', 
            'office equipment', 
            'office furniture', 
            'transport & travelling', 
            'disaster management', 
            'monitoring equipment', 
            'fire and emergency'
        ];

        foreach ($categories as $category) {
            TenderCategory::factory()
                ->hasTenders(5)
                ->create([
                    'name' => $category,
                    'slug' => strtolower(Str::slug($category, '-')),
                ]);
        }
    }
}
