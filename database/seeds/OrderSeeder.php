<?php

use Illuminate\Database\Seeder;
use App\order;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $status = ['New','Padding','Ready','Done','Cancel'];
        for($i=0;$i<20; $i++){
            $order = new order;
            $order->staff_id = rand(1,5);
            $order->table_id = rand(1,5);
            $order->menu_id = rand(1,5);
            $order->quantity = rand(1,5);
            $order->total_bill = rand(1000,5000);
            $order->status = $status[rand(0,4)];

            $order->save();
        }
    }
}
