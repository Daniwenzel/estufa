<?php

use Illuminate\Database\Seeder;

class TemperaturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Temperature::class, 200)->create();
    }
}
