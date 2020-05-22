<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use OurLive\Comment;
use Faker\Generator as Faker;

$factory->define(OurLive\Comment::class, function (Faker $faker) {
    return [
        //
        'body' => '素敵なカフェですね',
    ];
});
