<?php

use Illuminate\Database\Seeder;
use App\option_order;
class OptionOrderSeeder extends Seeder
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
            $optionOrder = new option_order;
            
            $optionOrder->option_id = rand(1,5);
            $optionOrder->order_id = rand(1,10);


            $optionOrder->save();
        }
    }
}
