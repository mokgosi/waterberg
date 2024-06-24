<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Page;
use Illuminate\Support\Str;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            // 'home', 
            'about', 
            'history', 
            'contact', //contact
            'disclaimer', 
            'privacy policy', 
            'terms of service',
            'legal notices',
            'careers', //careers
            'tourism', 
            'archives',
            'notices', //files
            'mining',
            'location',
            'events', //events
            'directory',
            'speeches',
            'links',
            'maps',
            'faqs',
            'help & support',
            'tenders', //files
            'feedback', //feedback
            'agriculture',
            'developments', 
            'infrastructure',
            'demographics',
            'mission & vision',
            'strategic documents', //files
            'legislation and documents', //files
            'draft by-laws Emergency Services', //files
            'draft by-laws Environmental Health', //files

            'request for tender', //files
            'request for quotation', //files
            'bids received', //files
            'bids disqualified', //files
            'tenders awarded reports', //files
            'mwig projects cluster 1 to 6', //files
            'pmu projects', //files
            'archived tenders', //files
        ];

        foreach ($pages as $page) {
            Page::factory()->create([
                'title' => ucwords($page),
                'slug' => Str::slug($page, '-'),
                'template' => 'default',
            ]);
        }
    }
}
