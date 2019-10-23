<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TemperaturesSeeder extends Seeder
{
    public function run()
    {
        $created_at = new Carbon('first day of January 2018', 'America/Sao_Paulo');

        factory(App\Temperature::class, 9000)->make()->each(function ($temperatures) use($created_at) {
            $temperatures->created_at = $created_at;
            $temperatures->save();

            $created_at->addMinutes(5);
        });
    }
}
