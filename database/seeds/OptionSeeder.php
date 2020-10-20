<?php

use Illuminate\Database\Seeder;
use App\option;
class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<20; $i++){
            $option = new option;
            $option->option_name = $faker->name;
            $option->menu_id = rand(1,5);
            $option->price = rand(1000,5000);

            $option->save();
        }
    }
}
