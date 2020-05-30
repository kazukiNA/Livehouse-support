<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use OurLive\Orner;

class OrnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Orner::class,50)->create();
    }
}
