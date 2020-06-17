<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Marca;
use Faker\Generator as Faker;

$factory->define(Marca::class, function (Faker $faker) {
    return [
        'brand_name' => $faker->unique()->company,
        'brand_code' => $faker->postcode,
        'brand_address' =>$faker->streetAddress,
        'brand_image' => '',
        'brand_code_postal' => $faker->postcode,
        'brand_telefono' => $faker->e164PhoneNumber,
        'brand_email' => $faker->companyEmail,
        'brand_web' => $faker->url,
        'brand_ubigeo' => $faker->postcode,
        'brand_estado' => $faker->randomElement([0,1]),
    ];
});
