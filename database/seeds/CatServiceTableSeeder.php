<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CatServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cat_services')->insert(
            [
                [
                    'title' => 'Web applications',
                    'icon' => 'fa fa-laptop',
                    'content' => 'Design and develop web applications, hosting service, domain, SEO.',
                ],
                [
                    'title' => 'Mobile Applications',
                    'icon' => 'fa fa-mobile',
                    'content' => 'Design and develop mobile applications, publish and app store optimization.',
                ],
                [
                    'title' => 'Mobile Games',
                    'icon' => 'fa fa-gamepad',
                    'content' => 'Design and develop mobile games, publish and app store optimization.',
                ]
            ]
        );
    }
}
