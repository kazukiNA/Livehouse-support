<?php

use Illuminate\Database\Seeder;
use OurLive\Reward;

class RewardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        $project = factory(Reward::class,30)->create();
    }
}
