<?php

use Illuminate\Database\Seeder;
use App\menu;
class MenuSeeder extends Seeder
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
            $menu = new menu;
            $menu->item_name = $faker->name;
            $menu->quantity = rand(1,5);
            $menu->amount = rand(10,50);
            $menu->price = rand(1000,5000);
            $menu->image = 'https://via.placeholder.com/350x250';
            
            $menu->save();
        }
    }
}
