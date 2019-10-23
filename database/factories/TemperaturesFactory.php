<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Temperature::class, function (Faker $faker) {
    return [
        'sensor_id' => 1,
        'leitura' => $faker->randomFloat($nbMaxDecimals = NULL, $min = -10, $max = 40),
        'created_at' => new Carbon()
    ];
});
