<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $project = [
                            'title' => '支援よろしくお願いします',
                            'description' => '今回のコロナウイルスの影響により、ライブハウスを存続させることが難しくなりました。お力を貸してください。',
                            'livehouse_name' => '下北沢ABC',
                            'target_amount' => '200000',
                            'apprication_end' => '2021-03-31',
            ];
            DB::table('projects')->insert($project);
            $project = [
                'title' => '協力してください',
                'description' => 'しばらくライブがをすることができないため、固定費だけが残ります。少しでも協力してくださると幸いです。よろしくお願いします。',
                'livehouse_name' => '渋谷ミーツ',
                'target_amount' => '400000',
                'apprication_end' => '2020-11-30',
            ];
            DB::table('projects')->insert($project);
            $project = [
                'title' => 'またライブできる日まで',
                'description' => 'コロナの影響で、うちのライブハウスも経営困難な状況に陥っています。またみなさんと会う日が来ることを切に願っており、手伝っていただきたく申します。どうかお願いします。',
                'livehouse_name' => '代官山ミューズ',
                'target_amount' => '1000000',
                'apprication_end' => '2020-12-31',
            ];
            DB::table('projects')->insert($project);
            $project = [
                'title' => 'お返しはしっかりします',
                'description' => '弊ライブハウスは、しばらく営業開始の目処が立っておらず、先が見えない状況となっています。もしよろしければ、少額でも手伝っていただけると幸いです。お返しは期待以上のものを差し上げます。',
                'livehouse_name' => '新宿F',
                'target_amount' => '400000',
                'apprication_end' => '2022-01-31',
            ];
            DB::table('projects')->insert($project);
            $project = [
                'title' => '音楽を鳴らせるように',
                'description' => 'ライブハウス六本木M-10も、コロナの影響を受けています。どこのライブハウスも厳しい状況だとは思いますが、一回でも遊びに来てくださったお客様は、また音で遊べるように力を貸していただきたいです。よろしくお願いします。',
                'livehouse_name' => '六本木M-10',
                'target_amount' => '500000',
                'apprication_end' => '2021-06-30',
            ];
            DB::table('projects')->insert($project);
            $project = [
                'title' => 'ご協力お願いします',
                'description' => '吉祥寺ユースは、緊急事態宣言を受け、しばらく営業をすることができていない状態です。この業界に限らず、みなさん大変だとは思いますが、心優しい方の支援をお待ちしております。よろしくお願いします。',
                'livehouse_name' => '吉祥寺ユース',
                'target_amount' => '2000000',
                'apprication_end' => '2021-03-31',
            ];
            DB::table('projects')->insert($project);
            $project = [
                'title' => 'この危機を乗り越えれるように',
                'description' => '池袋のライブハウスとして長年愛されているアイは、今回のウイルスにより、危機を迎えています。この先も何十年と続けられるように、支援お待ちしております。',
                'livehouse_name' => '池袋アイ',
                'target_amount' => '600000',
                'apprication_end' => '2020-09-30',
            ];
            DB::table('projects')->insert($project);
            $project = [
                'title' => '全ての音楽ファンへ',
                'description' => '音楽を愛する皆さんへ。日比谷GATEは、これまで日本の音楽業界を引っ張ってきました。しかし、私たちでもこの危機を乗り越えるにはみなさんのお力が必要です。音楽を愛するみなさんの、支援お待ちしています。',
                'livehouse_name' => '日比谷GATE',
                'target_amount' => '400000',
                'apprication_end' => '2020-12-31',
            ];
            DB::table('projects')->insert($project);
            $project = [
                'title' => 'お力貸してください',
                'description' => 'コロナウイルスにより、私たちはこの先が不透明な状況になっています。どうかお力を貸してください。よろしくお願いします。',
                'livehouse_name' => '中野DAY&NIGHT',
                'target_amount' => '800000',
                'apprication_end' => '2020-11-30',
            ];
            DB::table('projects')->insert($project);
            $project = [
                'title' => '経営を続けるのが難しい状況です。',
                'description' => '東京TENは、度重なるライブ中止により、経営を続けるのが難しい状況となってしましました。この先も、みなさんとイベントを楽しめるように、支援お願いします。',
                'livehouse_name' => '東京TEN',
                'target_amount' => '1000000',
                'apprication_end' => '2021-08-31',
            ];
            DB::table('projects')->insert($project);
            $project = [
                'title' => 'このウイルスに負けないように',
                'description' => '今回のコロナウイルスで、私たちのライブハウスも、営業再開の目処が立っておらず、難しい状況となっています。よろしければ、少額でも支援していただけると幸いです。',
                'livehouse_name' => '代々木HOT',
                'target_amount' => '900000',
                'apprication_end' => '2020-12-31',
            ];
            DB::table('projects')->insert($project);
    }
}

