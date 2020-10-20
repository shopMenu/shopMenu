<?php

use Illuminate\Database\Seeder;
use App\category_menu;
class CategoryMenuSeeder extends Seeder
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
            $category_menu = new category_menu;
            
            $category_menu->menu_id = rand(1,5);
            $category_menu->category_id = rand(1,10);


            $category_menu->save();
        }
    }
}
