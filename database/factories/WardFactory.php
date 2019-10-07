<?php

$factory->define(\thelabdev\Laratlas\Ward::class, function (\Faker\Generator $faker){
    return [
        'ward_name' => $faker->text,
        'district_id' => function(){
            return \thelabdev\Laratlas\District::all()->random();
        },
        'latitude' => $faker->latitude,
        'longitude' => $faker->longitude
    ];
});
