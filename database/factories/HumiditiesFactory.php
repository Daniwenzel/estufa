<?php

use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(App\Humidity::class, function (Faker $faker) {
    return [
        'sensor_id' => 2,
        'leitura' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100),
        'created_at' => new Carbon()
    ];
});
