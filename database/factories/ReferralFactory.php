<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Referral;
use Faker\Generator as Faker;

$factory->define(Referral::class, function (Faker $faker) {
        return [
            'user_id' => 1,
            'account_id'=>2,
            'name' => $faker->name,
            'account_type' => 'advertiser',
            'account_status' => 'not active',
            'paid' => false,
        ];
});
