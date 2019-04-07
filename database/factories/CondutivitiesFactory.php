<?php

use Faker\Generator as Faker;

$factory->define(App\Condutivity::class, function (Faker $faker) {
    return [
        'sensor_topic' => 'sensor/condutividade',
        'leitura' => $faker->randomFloat($nbMaxDecimals = NULL, $min = -1, $max = 1)
    ];
});
