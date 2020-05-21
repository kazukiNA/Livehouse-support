<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
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
            'title' => '僕たちに力を貸してください',
            'description' => 'コロナの影響で営業を続けるのが厳しくなっています。よろしければお力を貸してください。',
            'livehouse_name' => 'A',
            'target_amount' => '100000',
            'aprication_period' => '30',
        ];
        DB::table('Projects')->insert($param);

        $param = [
            'title' => 'こんな状況ですが僕たちに力を貸してください',
            'description' => '私たちライブハウスBは、今回のコロナの影響で営業を続けるのが厳しくなっています。リターンはしっかりとさせていただきます。ライブハウス存続のためにも、どうかお力を貸してください。',
            'livehouse_name' => 'B',
            'target_amount' => '3330000',
            'aprication_period' => '20',
        ];
        DB::table('Projects')->insert($param);
    }
}
