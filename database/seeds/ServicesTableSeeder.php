<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert(
        [
            [
                'title' => 'Web Programing',
                'content' => 'Outsourcing & web design on demand, not only business requirements but also technical requirements and system architecture.',
                'image' => 'img/web-outsourcing.jpg',

            ],
            [
                'title' => 'Shopping website',
                'content' => 'Generate a shopping website base on existing template with the best price.',
                'image' => 'img/shopping-website.jpg'
            ],
            [
                'title' => 'Portal',
                'content' => 'Design and develop CMS sites, Portals for  education, business, medical...',
                'image' => 'img/cms-site.jpg',
            ],
            [
                'title' => 'Real estate',
                'content' => 'Design and develop Websites for finding houses, real estate, house for rent...',
                'image' => 'img/bds-site.jpg',
            ],
            [
                'title' => 'Web maintenance',
                'content' => 'Operating, maintenance, upgrade, repair, create more features... for exesting website.',
                'image' => 'img/website-maintenance.jpg',
            ],
            [
                'title' => 'Website hosting',
                'content' => 'Operating, maintenance, upgrade, repair, create more features... for exesting website.',
                'image' => 'img/hosting-cloud.jpg',
            ]
        ]);
    }
}
