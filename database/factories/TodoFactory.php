<?php

use Faker\Generator as Faker;

$factory->define(App\Todo::class, function (Faker $faker) {
    return [
        'titles' => $faker->word,
        'description' => $faker->text
    ];
});
