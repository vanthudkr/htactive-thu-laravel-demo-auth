<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChooseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chooses')->insert(
            [
                [
                    'title' => 'THE RIGHT TEAM',
                    'content' => 'We love what we do, some might say a bit too much, and we bring enthusiasm and commitment to every project we work on. Put simply, if you want a partner who cares about your business, choose HT Active.',
                    'image' => 'img/whychooseus.png',
                ],
                [
                    'title' => 'WE LISTEN',
                    'content' => 'We listen, we discuss, we advise. We then select the best solution to fit. We don’t shoehorn projects and if we feel we’re not a good fit we’ll be honest and tell you from the outset. We are experienced programmers, we love discussing and planning new projects and have years of knowledg e and ex',
                    'image' => 'img/whychooseus1.jpg',
                ],
                [
                    'title' => 'CREATIVE & TECHNICAL',
                    'content' => 'Whether it’s website or application, game..., system development or custom programming, we like to keep everything under one roof to make it easier for our customers. We love nothing more than working on a great project with a fantastic client. We care about our clients and can often be found',
                    'image' => 'img/whychooseus2.jpg',
                ],
                [
                    'title' => 'UNDER ONE ROOF',
                    'content' => 'HT Active is \'one - stop - shop\' software solution agency providing everything you need to successfully market your business to customers. Our services include planning and strategy, design and development, building and deploying web applications/mobile application/game belong with graphic design,',
                    'image' => 'img/studio.png',
                ]
            ]
        );
    }
}
