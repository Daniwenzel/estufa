<?php

use Faker\Generator as Faker;

$factory->define(App\Temperature::class, function (Faker $faker) {
    return [
        'sensor_topic' => 'sensor/temperatura',
        'leitura' => $faker->randomFloat($nbMaxDecimals = NULL, $min = -10, $max = 40)
    ];
});
