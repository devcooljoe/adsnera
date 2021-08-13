<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Earning;
use Faker\Generator as Faker;

$factory->define(Earning::class, function (Faker $faker) {
    $list = [4, 5, 6, 7, 8, 9];
    $rnd = rand(0, 5);
    return [
        'user_id' => $list[$rnd],
        'task_id' => rand(1, 100),
        'user_agent' => $faker->userAgent,
        'paid' => true,
    ];
});
