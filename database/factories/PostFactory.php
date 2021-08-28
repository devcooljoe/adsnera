<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => 2,
        'title' => $faker->sentence(8),
        'picture' => 'nothing',
        'body' => $faker->paragraph(2),
        'category' => 'general',
        'status' => 'approved',
    ];
});
