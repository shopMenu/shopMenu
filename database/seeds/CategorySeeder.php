<?php

use Illuminate\Database\Seeder;
use App\category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<5; $i++){
            $Category = new category;
            $Category->category_name = $faker->name;
            $Category->save();
        }
    }
}
