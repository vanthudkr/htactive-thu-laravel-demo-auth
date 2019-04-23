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
                    'title' => 'Web Applications',
                    'icon' => 'fa fa-laptop',
                    'content' => 'Design and develop web applications, hosting service, domain, SEO.',
                    'parent_id' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'title' => 'Mobile Applications',
                    'icon' => 'fa fa-mobile',
                    'content' => 'Design and develop mobile applications, publish and app store optimization.',
                    'parent_id' => 2,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'title' => 'Mobile Games',
                    'icon' => 'fa fa-gamepad',
                    'content' => 'Design and develop mobile games, publish and app store optimization.',
                    'parent_id' => 3,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]
            ]
        );
    }
}
