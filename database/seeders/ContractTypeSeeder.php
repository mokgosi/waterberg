<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ContractType;
use App\Models\Career;
use Illuminate\Support\Str;

class ContractTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contracts = [
            'Contract', 
            'Part Time', 
            'Full Time',
        ];

        foreach ($contracts as $contract) {


            ContractType::factory()
                ->hasCareers(5)
                ->create([
                    'name' => $contract,
                    'slug' => strtolower(Str::slug($contract, '-')),
                ]);    




            // ContractType::factory()->create([
            //     'name' => $contract,
            //     'slug' => Str::slug($contract, '-'),
            // ])->each(function($contractType) {
                
            //     $title = fake()->words(3, true);

            //     Career::factory(rand(1,3))->create([
            //         'contract_type_id' => $contractType->id,
            //         'title' => $title,
            //         'slug' => strtolower(Str::slug($title, '-')),
            //     ]);
            // });
        }
    }
}
