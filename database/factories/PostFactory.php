<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use OurLive\Post;
use Faker\Generator as Faker;

$factory->define(OurLive\Post::class, function (Faker $faker) {
    return [
        //
        'title' => 'このカフェいいな',
        'body' => '府中にあるカフェです',
    ];
});
