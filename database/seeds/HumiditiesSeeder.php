<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class HumiditiesSeeder extends Seeder
{
    public function run()
    {
        $created_at = new Carbon('first day of January 2018', 'America/Sao_Paulo');

        factory(App\Humidity::class, 9000)->make()->each(function ($humidity) use($created_at) {
            $humidity->created_at = $created_at;
            $humidity->save();

            $created_at->addMinutes(5);
        });
    }
}
