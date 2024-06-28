<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tender>
 */
class TenderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = rtrim(fake()->sentence(random_int(5,10)), '.');
        $number = 'WDM/2023/'.fake()->randomNumber($nbDigits = 4, $strict = true) ;

        return [
            'title' => $title,
            'number' =>  $number,
            'amount' => '',
            'attachment' => 'file.pdf',
            'content'=> fake()->sentence(5),
            'slug' => strtolower(Str::slug($number, '-')),
            'tender_category_id' => 1,
            'opening_date' => fake()->date($format = 'Y-m-d', $max = 'now'), 
            'closing_date' => fake()->date($format = 'Y-m-d', $max = '+2 months'),
        ];
    }
}
