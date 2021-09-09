<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id' => 2,
        'name' => $faker->sentence(3),
        'picture' => null,
        'link' => $faker->url,
        'status' => 'pending',
    ];
});
