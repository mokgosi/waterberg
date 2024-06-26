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

            //about
            'about', 
            'location', //about
            'history', //about
            'demographics', //about
            'mission & vision', //about

            //developments
            'developments', 
            'infrastructure',  //developements
            'agriculture', //developements
            'tourism', //developements
            'mining', //developements

            //business
            'business',
            'request for tender', //files
            'request for quotation', //files
            'bids received', //files
            'bids disqualified', //files
            'tenders awarded reports', //files
            'mwig projects cluster 1 to 6', //files
            'pmu projects', //files
            'archived tenders', //files
            

            'disclaimer', //static 
            'privacy policy',  //static
            'terms of service', //static
            'legal notices', //static
            'links', //static
            'maps', //static    
            'faqs', //static    

            'contact', //contact
            'careers', //careers
            'events', //events
            'directory', //directory
            'wdm tv', //youtube 
            
            'archives',
            'speeches',
            'help & support',
            'feedback', //feedback
            
            'notices', //files
            'strategic documents', //files
            'legislation and documents', //files
            'draft by-laws Emergency Services', //files
            'draft by-laws Environmental Health', //files
            
        ];

        foreach ($pages as $page) {

            $parent = '';
            if (in_array($page, ['infrastructure', 'agriculture',  'tourism', 'mining',])) {
                $parent = 'developments';
            } 

            if (in_array($page, ['request for tender','request for quotation','bids received','bids disqualified','tenders awarded reports','mwig projects cluster 1 to 6','pmu projects', 'archived tenders'])) {
                $parent = 'business';
            } 


            Page::factory()->create([
                'title' => ucwords($page),
                'slug' => Str::slug($page, '-'),
                'parent' => $parent,
                'template' => 'default',
            ]);
        }
    }
}
