<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use OurLive\Order;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,50),
        'quantity' => $faker->numberBetween(1,5),
        'reward_id' => $faker->numberBetween(1,30),
    ];
});
