<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Entidad;
use Faker\Generator as Faker;

$factory->define(Entidad::class, function (Faker $faker) {
    return [
        'ent_secuencia' => 1,
        'ent_nombre'    => 'Secundaria Completa',
        'ent_criterio'  =>'GRADO_INSTRUCCION',
        'ent_estado'    =>1,
    ];
});
