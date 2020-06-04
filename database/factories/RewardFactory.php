<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use OurLive\Reward;
use OurLive\Project;
use Illuminate\Support\Str;

$factory->define(Reward::class, function (Faker $faker) {
    $content1 = "タオル\nライブハウス特製おのタオルを差し上げます。吸水性は抜群です。";
    $content2 = "リストバンド\n暗闇でも光ります。コロナが治った後のライブの機会にお使いください。";
    $content3 = "Tシャツ\nフロントにライブハウス名が入った、限定Tシャツです。これからの季節にぴったりだと思います。";
    $content4 = "ドリンクチケット\n弊ライブハウスのバーカウンターで、お好きなドリンクから選べます。";
    $content5 = "ソックス\nライブハウス名をつけたおしゃれなワンポイントソックスです。いかかでしょうか。";
    $content6 = "イベントチケット1回分\n弊ライブハウスで行われるライブを一回無料で参加いただけます。";
    $content7 = "イベントチケット1年分\n弊ライブハウスで2021に行われる全てのイベントを1年間無料でご参加いただけます.";
    return [
        'project_id' => $faker->numberBetween(1,11),
        'reward_price' => $faker->numberBetween(1,20) * 1000,
        'reward_content' => $faker->randomElement([$content1,$content2,$content3,$content4,$content5,$content6,$content7])
    ];
});
