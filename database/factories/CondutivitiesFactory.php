<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Condutivity::class, function (Faker $faker) {
    return [
        'sensor_id' => 3,
        'leitura' => $faker->randomFloat($nbMaxDecimals = NULL, $min = -1, $max = 1),
        'created_at' => new Carbon()
    ];
});
