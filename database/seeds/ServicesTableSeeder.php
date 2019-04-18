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
                'icon' => 'fa fa-laptop',
                'title' => 'Web applications',
                'content' => 'Design and develop web applications, hosting service, domain, SEO.',
            ],
            [
                'icon' => 'fa fa-mobile',
                'title' => 'Mobile Applications',
                'content' => 'Design and develop mobile applications, publish and app store optimization.',
            ],
            [
                'icon' => 'fa fa-gamepad',
                'title' => 'Mobile Games',
                'content' => 'Design and develop mobile games, publish and app store optimization.',
            ]
        ]);
    }
}
