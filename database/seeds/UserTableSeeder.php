<?php

use Illuminate\Database\Seeder;

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
            'name' => 'wataru',
            'email' => 'wataru@example.com',
            'password'=>'hogehogehoge',
        ];
        DB::table('users')->insert($param);
        $param = [
            'id'=>'2',
            'name' => 'saori',
            'email' => 'saori@example.com',
            'password'=>'hogehogehoge',
        ];
        DB::table('users')->insert($param);
        $param = [
            'id'=>'3',
            'name' => 'ryunosuke',
            'email' => 'ryunosuke@example.com',
            'password'=>'hogehogehoge',
        ];
        DB::table('users')->insert($param);
    }
    }
