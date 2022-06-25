<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Atividade;
use Faker\Generator as Faker;
use Illuminate\Support\Str;


$factory->define(Atividade::class, function (Faker $faker) {
    return [
        'nome' => 'Atividade '. Str::random(6),
        'data' => now(),
        'user_id' => 1,
        'flag_encerrada' => false
    ];
});
