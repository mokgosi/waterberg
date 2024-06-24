<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PoliticalParty;
use Illuminate\Support\Str;

class PoliticalPartySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parties = [
            'anc',
            'da',
            'eff',
            'mk',
            'ifp'
        ]; 

        foreach($parties as $party) {

            PoliticalParty::factory()->create([
                'name' => $party,
                'full_name' => '',
                'slug' => strtolower(Str::slug($party, '-')),
            ]);
        }
    }
}
