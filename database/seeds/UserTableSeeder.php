<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'id'=>'1',
            'name' => '鈴木渉',
            'email' => 'wataru@hoge.com',
            'gender' => 'male',
            'password'=>'hogehogehoge',
        ];
        DB::table('users')->insert($param);
        $param = [
            'id'=>'2',
            'name' => '大島沙織',
            'gender' => 'female',
            'email' => 'saori@hoge.com',
            'password'=>'hogehogehoge',
        ];
        DB::table('users')->insert($param);
        $param = [
            'id'=>'3',
            'name' => '阿部龍之介',
            'gender' => 'secret',
            'email' => 'ryunosuke@hoge.com',
            'password'=>'hogehogehoge',
        ];
        DB::table('users')->insert($param);
        $param = [
            'id'=>'4',
            'name' => '飯島雪',
            'gender' => 'female',
            'email' => 'yuki@hoge.com',
            'password'=>'hogehoge',
        ];
        DB::table('users')->insert($param);
        $param = [
            'id'=>'5',
            'name' => '有村大',
            'gender' => 'male',
            'email' => 'dai@hoge.com',
            'password'=>'hogehogehoge',
        ];
        DB::table('users')->insert($param);
        $param = [
            'id'=>'6',
            'name' => '南綾乃',
            'gender' => 'secret',
            'email' => 'ayano@hoge.com',
            'password'=>'hogehogehoge',
        ];
        DB::table('users')->insert($param);
        $param = [
            'id'=>'7',
            'name' => '佐藤学',
            'gender' => 'male',
            'email' => 'manabu@hoge.com',
            'password'=>'hogehogehoge',
        ];
        DB::table('users')->insert($param);
        $param = [
            'id'=>'8',
            'name' => '本村葵',
            'gender' => 'female',
            'email' => 'aoi@hoge.com',
            'password'=>'hogehogehoge',
        ];
        DB::table('users')->insert($param);
        $param = [
            'id'=>'9',
            'name' => '小林七海',
            'gender' => 'secret',
            'email' => 'nanami@hoge.com',
            'password'=>'hogehogehoge',
        ];
        DB::table('users')->insert($param);
    }
    }
