<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(CatServiceTableSeeder::class);
        $this->call(ChooseTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
