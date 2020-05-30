<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use OurLive\Orner;
use Illuminate\Support\Str;

$factory->define(Orner::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        //'ruby' => $faker->kanaName,
        'phone_number' => $faker->phoneNumber,
        'address' => $faker->address,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => $faker->password,
        'remember_token' => Str::random(10),
    ];
});
