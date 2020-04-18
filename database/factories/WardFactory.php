<?php

$factory->define(\Thelabdev\Laratlas\Ward::class, function (\Faker\Generator $faker) {
    return [
        'ward_name'   => $faker->text,
        'district_id' => function () {
            return \Thelabdev\Laratlas\District::all()->random();
        },
        'latitude'  => $faker->latitude,
        'longitude' => $faker->longitude,
    ];
});
