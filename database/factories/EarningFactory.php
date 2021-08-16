<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Earning;
use Faker\Generator as Faker;

$factory->define(Earning::class, function (Faker $faker) {
    $list = [2, 3, 4, 5, 8];
    $rnd = rand(0, 4);
    return [
        'user_id' => $list[$rnd],
        'task_id' => rand(1, 100),
        'user_agent' => $faker->userAgent,
        'paid' => true,
    ];
});
