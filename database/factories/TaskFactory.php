<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    $list = [1, 2, 3, 10];
    $rnd = rand(0, 3);
    return [
        'user_id' => $list[$rnd],
        'name' => $faker->sentence(3),
        'caption' => $faker->realText,
        'picture' => null,
        'link' => $faker->url,
        'status' => 'pending',
    ];
});
