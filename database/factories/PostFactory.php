<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog\Models\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true)
    ];
});
