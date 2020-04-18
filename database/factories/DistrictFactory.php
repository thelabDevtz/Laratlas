<?php

$factory->define(\Thelabdev\Laratlas\District::class, function (Faker\Generator $faker) {
    return [
        'district_name' => $faker->streetName,
        'latitude'      => $faker->latitude,
        'longitude'     => $faker->longitude,
        'region_id'     => function () {
            return \Thelabdev\Laratlas\Region::all()->random();
        },
    ];
});
