<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lead;
use Faker\Generator as Faker;

$factory->define(Lead::class, function (Faker $faker) {
    $list = [1, 6, 7, 9, 10];
    $rnd = rand(0, 4);
    return [
        'user_id' => $list[$rnd],
        'task_id' => rand(1, 100),
        'user_agent' => $faker->userAgent,
        'billed' => true,
    ];
});
