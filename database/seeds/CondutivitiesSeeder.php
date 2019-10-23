<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CondutivitiesSeeder extends Seeder
{
    public function run()
    {
        $created_at = new Carbon('first day of January 2018', 'America/Sao_Paulo');

        factory(App\Condutivity::class, 9000)->make()->each(function ($condutivity) use($created_at) {
            $condutivity->created_at = $created_at;
            $condutivity->save();

            $created_at->addMinutes(5);
        });
    }
}
