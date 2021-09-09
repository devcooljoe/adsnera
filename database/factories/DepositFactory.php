<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Deposit;
use Faker\Generator as Faker;

$factory->define(Deposit::class, function (Faker $faker) {
    
    return [
        'user_id' => 2,
        'amount' => 1000,
        'status' => 'successful',
    ];
});
