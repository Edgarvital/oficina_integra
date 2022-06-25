<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tarefa;
use Faker\Generator as Faker;

$factory->define(Tarefa::class, function (Faker $faker) {
    return [
        'nome' => 'Tarefa '. Str::random(6),
        'atividade_id' => 1,
        'flag_concluida' => false
    ];
});
