<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'thu',
                    'email' => 'thu@gmail.com',
                    'password' => bcrypt('00000000'),
                    'is_admin' => 1,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ],
                [
                    'name' => 'long',
                    'email' => 'long@gmail.com',
                    'password' => bcrypt('00000000'),
                    'is_admin' => 0,
                    'created_at' => new DateTime(),
                    'updated_at' => new DateTime(),
                ]
            ]
        );
    }
}
