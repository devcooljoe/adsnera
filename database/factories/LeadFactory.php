<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Lead;
use Faker\Generator as Faker;

$factory->define(Lead::class, function (Faker $faker) {
    return [
        'user_id' => 2,
        'task_id' => rand(1, 100),
        'user_agent' => $faker->userAgent,
        'billed' => true,
    ];
});
