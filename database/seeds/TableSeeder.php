<?php

use Illuminate\Database\Seeder;
use App\table;
class TableSeeder extends Seeder
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
            $table = new table;
            $table->table_name = $i;
            $table->status = rand(0,1);

            $table->save();
        }
    }
}
