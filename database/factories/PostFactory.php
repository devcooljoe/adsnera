<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) { 
    $title = $faker->sentence(8);
    $id = preg_replace('/ /', '-', substr(strtolower($title), 0, 50));
    $id = preg_replace('/[^A-Za-z0-9]|\-/', '-', $id);
    return [
        'custom_id' => $id.'-'.uniqid(),
        'user_id' => 2,
        'title' => $title,
        'picture' => 'nothing',
        'body' => $faker->paragraph(2),
        'category' => 'general',
        'status' => 'approved',
    ];
});
