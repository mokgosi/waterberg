<?php

namespace Database\Seeders;

use App\Models\Councillor;
use App\Models\Committee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommitteeCouncillorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //committees 12, concillors 10
        $councillors = Councillor::all();
        
        foreach($councillors as $councillor) {
            $committees = Committee::inRandomOrder()->take(rand(1,12))->pluck('id');
            $councillor->committees()->attach($committees);
        }
    }
}
