<?php

use Illuminate\Database\Seeder;

class HumiditiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Humidity::class, 200)->create();
    }
}
