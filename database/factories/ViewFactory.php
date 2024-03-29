<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\View;
use Faker\Generator as Faker;

$factory->define(View::class, function (Faker $faker) {
    return [
        'task_id' => rand(1, 100),
        'user_agent' => $faker->userAgent,
    ];
});
