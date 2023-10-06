<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookinfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bookinfos')->insert([
            'image_path' => 'https://m.media-amazon.com/images/I/71+VlCJBxoL._SY466_.jpg',
            'title' => '頭のいい人が話す前に考えていること',
            'author' => '安達 裕哉 (著)',
            'publisher' => 'ダイヤモンド社',
            'date' => '2023/4/19',
            'isbn' => '978-4478116692',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('bookinfos')->insert([
            'image_path' => 'https://m.media-amazon.com/images/I/51Z3OdBXFLL._SX342_SY445_.jpg',
            'title' => 'きょうの料理 おしえて志麻さん! お助けレシピ100 (生活実用シリーズ) ムック',
            'author' => 'タサン 志麻 (著)',
            'publisher' => 'NHK出版',
            'date' => '2023/9/19',
            'isbn' => '978-4141993292',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('bookinfos')->insert([
            'image_path' => 'https://m.media-amazon.com/images/I/71zjKnRE-eL._SY466_.jpg',
            'title' => '鵼の碑 (講談社ノベルス)',
            'author' => '京極 夏彦 (著)',
            'publisher' => '講談社',
            'date' => '2023/9/14',
            'isbn' => '978-4065150450',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('bookinfos')->insert([
            'image_path' => 'https://m.media-amazon.com/images/I/419oU1AQQfL._SY445_SX342_.jpg',
            'title' => 'じぶんでできる浄化の本',
            'author' => '神人 (著)',
            'publisher' => '徳間書店',
            'date' => '2023/9/28',
            'isbn' => '978-4198656898',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('bookinfos')->insert([
            'image_path' => 'https://m.media-amazon.com/images/I/51lfJ6tY4mL._SY466_.jpg',
            'title' => '人生を取り戻す',
            'author' => '高橋佳子 (著)',
            'publisher' => '三宝出版',
            'date' => '2023/4/15',
            'isbn' => '978-4879281401',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
