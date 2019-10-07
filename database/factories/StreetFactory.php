<?php

use thelabdev\Laratlas\Street;
$factory->define(Street::class, function (\Faker\Generator $faker){
    return [
        'street_name' => $faker->streetName,
        'ward_id' => function(){
            return \thelabdev\Laratlas\Ward::all()->random();
        },
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude
    ];
});
