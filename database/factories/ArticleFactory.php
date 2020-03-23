<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Article::class, function (Faker $faker){
    return [
        'title' => $faker->sentence,
        'description' => $faker->sentences,
        'lables' => $faker->words,
    ];
});