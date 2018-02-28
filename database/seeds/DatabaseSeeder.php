<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Type::insert([
            [
                'type_code' => 'video',
                'name' => '电影',
            ],
            [
                'type_code' => 'video',
                'name' => '电视剧',
            ],
            [
                'type_code' => 'video',
                'name' => '综艺'
            ],
            [
                'type_code' => 'video',
                'name' => '动漫'
            ],
            [
                'type_code' => 'video',
                'name' => '音乐'
            ],
            [
                'type_code' => 'video',
                'name' => '舞蹈'
            ],
            [
                'type_code' => 'video',
                'name' => '生活'
            ],
            [
                'type_code' => 'video',
                'name' => '游戏'
            ],
            [
                'type_code' => 'video',
                'name' => '娱乐'
            ],
            [
                'type_code' => 'video',
                'name' => '纪录片'
            ],
            [
                'type_code' => 'parse',
                'name' => '优酷'
            ],
            [
                'type_code' => 'parse',
                'name' => '腾讯'
            ],
            [
                'type_code' => 'parse',
                'name' => '爱奇艺'
            ],
            [
                'type_code' => 'parse',
                'name' => '搜狐'
            ],
            [
                'type_code' => 'parse',
                'name' => '乐视'
            ],
            [
                'type_code' => 'parse',
                'name' => '哔哩哔哩'
            ],
            [
                'type_code' => 'parse',
                'name' => 'PPTV'
            ],
            [
                'type_code' => 'parse',
                'name' => '芒果TV'
            ],
            [
                'type_code' => 'parse',
                'name' => '土豆'
            ],
            [
                'type_code' => 'parse',
                'name' => '央视网'
            ],
            [
                'type_code' => 'article',
                'name' => '新闻'
            ],
            [
                'type_code' => 'article',
                'name' => '财经'
            ],
            [
                'type_code' => 'article',
                'name' => '科技'
            ],
            [
                'type_code' => 'article',
                'name' => '娱乐'
            ],
            [
                'type_code' => 'article',
                'name' => '汽车'
            ],
            [
                'type_code' => 'article',
                'name' => '游戏'
            ],
            [
                'type_code' => 'article',
                'name' => '旅游'
            ],
            [
                'type_code' => 'article',
                'name' => '技巧'
            ],
        ]);
        \App\Models\User::create([
            'name' => 'admin',
            'email' => '1770963469@qq.com',
            'password' => password_hash('123456', PASSWORD_DEFAULT)
        ]);
    }
}
