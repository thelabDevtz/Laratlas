<?php

use Thelabdev\Laratlas\Street;
$factory->define(Street::class, function (\Faker\Generator $faker){
    return [
        'street_name' => $faker->streetName,
        'ward_id' => function(){
            return \Thelabdev\Laratlas\Ward::all()->random();
        },
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude
    ];
});
