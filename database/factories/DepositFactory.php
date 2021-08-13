<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Deposit;
use Faker\Generator as Faker;

$factory->define(Deposit::class, function (Faker $faker) {
    $list = [1, 2, 3, 10];
    $rnd = rand(0, 3);
    return [
        'user_id' => $list[$rnd],
        'amount' => 1000,
        'status' => 'successful',
    ];
});
