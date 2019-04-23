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
                    'catService_id' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),

                ],
                [
                    'title' => 'Shopping website',
                    'content' => 'Generate a shopping website base on existing template with the best price.',
                    'image' => 'img/shopping-website.jpg',
                    'catService_id' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'title' => 'Portal',
                    'content' => 'Design and develop CMS sites, Portals for  education, business, medical...',
                    'image' => 'img/cms-site.jpg',
                    'catService_id' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'title' => 'Real estate',
                    'content' => 'Design and develop Websites for finding houses, real estate, house for rent...',
                    'image' => 'img/bds-site.jpg',
                    'catService_id' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'title' => 'Web maintenance',
                    'content' => 'Operating, maintenance, upgrade, repair, create more features... for exesting website.',
                    'image' => 'img/website-maintenance.jpg',
                    'catService_id' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'title' => 'Website hosting',
                    'content' => 'Operating, maintenance, upgrade, repair, create more features... for exesting website.',
                    'image' => 'img/hosting-cloud.jpg',
                    'catService_id' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'title' => 'Game with cocos2d',
                    'content' => 'Design, develop, publish, advertise mobile game in Cocos game engine.',
                    'image' => 'img/hosting-cloud.jpg',
                    'catService_id' => 3,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'title' => 'Game with Unity',
                    'content' => 'Design, develop, publish, advertise mobile game in Unity game engine.',
                    'image' => 'img/game-unity.png',
                    'catService_id' => 3,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'title' => 'Integration with 3rd',
                    'content' => 'Integrate game with advertise, social network, IAP... Publish game in IOS, Android, Windows Phone store.',
                    'image' => 'img/game-admod.png',
                    'catService_id' => 3,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'title' => 'Cross Platform Application',
                    'content' => 'Building mobile applications running on multiple platforms Xamarin, Ionic, ReactNative, NativeScript ...',
                    'image' => 'img/cross-platform.jpg',
                    'catService_id' => 2,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]
            ]
        );
    }
}
