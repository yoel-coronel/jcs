<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Ubigeo;
use Faker\Generator as Faker;

$factory->define(Ubigeo::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->postcode,
        'nombres' => $faker->sentence,
        'parent_id' =>$faker->postcode,
        'nivel' =>$faker->randomElement([1,2,3]),
    ];
});
