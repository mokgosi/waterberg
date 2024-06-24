<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Committee;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Page::factory(5)->create();
        // Issue::factory(5)->create();

        // Committee::factory(5)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'admin@admin.com',
        ]);

        // PoliticalParty::factory(5)->create();
        
        $this->call(PageSeeder::class);
        $this->call(CommitteeSeeder::class);

        $this->call([
            PoliticalPartySeeder::class,

            PortfolioSeeder::class,
            // CouncillorSeeder::class,
            ContractTypeSeeder::class,
            // CareerSeeder::class,
            ArticleCategorySeeder::class,

            CommitteeCouncillorSeeder::class,

        ]);
    }
}
