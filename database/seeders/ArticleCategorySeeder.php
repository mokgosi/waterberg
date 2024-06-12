<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\ArticleCategory;
use App\Models\Article;

class ArticleCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            "mayor's office",
            "council",
            "registry",
            "parks and recreation",
            "emargency management",
        ];
        
        foreach ($categories as $category) {
            ArticleCategory::factory()
                ->hasArticles(5)
                ->create([
                    'name' => $category,
                    'slug' => strtolower(Str::slug($category, '-')),
                ]);
        }
    }
}
