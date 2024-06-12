<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Portfolio;
use App\Models\Councillor;
use Illuminate\Support\Str;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $portfolios = [
            'Executive Mayor', 
            'Speaker',
            'Chief Whip',
            'Infrastructure Development', 
            'Budget and Treasury', 
            'Planning and Economic Development', //contact
            'Transformation and Administration', 
            'Social Development', 
            'Special Projects', 
            'Community Services', //careers
            'Councillor'
        ];

        foreach ($portfolios as $portfolio) {
            
            //for non portfolio holders - create as many as possible
            $count = ($portfolio == 'Councillor') ? 10 : 1;

            Portfolio::factory()
                ->hasCouncillors($count)
                ->create([
                    'title' => $portfolio,
                    'slug' => strtolower(Str::slug($portfolio, '-')),
                ]);
        }
    }
}
