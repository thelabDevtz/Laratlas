<?php

$factory->define(\thelabdev\Laratlas\District::class, function (Faker\Generator $faker) {
    return [
        'district_name' => $faker->streetName,
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude,
        'region_id' => function(){
            return \thelabdev\Laratlas\Region::all()->random();
        }
    ];
});
