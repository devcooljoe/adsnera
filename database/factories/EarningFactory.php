<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Earning;
use Faker\Generator as Faker;

$factory->define(Earning::class, function (Faker $faker) {
    
    return [
        'user_id' => 1,
        'task_id' => rand(1, 50),
        'user_agent' => $faker->userAgent,
        'paid' => true,
    ];
});
