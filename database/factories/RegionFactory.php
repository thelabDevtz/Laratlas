<?php

use Thelabdev\Laratlas\Region;

$factory->define(Region::class, function (Faker\Generator $faker) {
    return [
        'region_name' => $faker->city,
        'latitude'    => $faker->latitude,
        'longitude'   => $faker->longitude,
    ];
});
