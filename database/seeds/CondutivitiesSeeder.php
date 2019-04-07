<?php

use Illuminate\Database\Seeder;

class CondutivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Condutivity::class, 200)->create();
    }
}
