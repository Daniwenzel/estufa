<?php

use Faker\Generator as Faker;

$factory->define(App\Humidity::class, function (Faker $faker) {
    return [
        'sensor_topic' => 'sensor/umidade',
        'leitura' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100)
    ];
});
