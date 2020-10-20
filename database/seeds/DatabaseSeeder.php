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
        $this->call(CategorySeeder::class);
        $this->call(MenuSeeder::class);
        $this->call(OptionSeeder::class);
        $this->call(OptionOrderSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(TableSeeder::class);
        $this->call(CategoryMenuSeeder::class);




    }
}
