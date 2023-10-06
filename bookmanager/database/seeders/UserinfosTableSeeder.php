<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserinfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('userinfos')->insert([
            'se' => 1, // 管理者権限あり
            'username' => 'John Doe',
            'email' => 'user1@example.com',
            'password' => ('password1'), 
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ユーザー2
        DB::table('userinfos')->insert([
            'se' => 0,
            'username' => 'Jane Smith',
            'email' => 'user2@example.com',
            'password' => 'password2',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ユーザー3
        DB::table('userinfos')->insert([
            'se' => 0,
            'username' => 'Michael Johnson',
            'email' => 'user3@example.com',
            'password' => 'password3',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ユーザー4
        DB::table('userinfos')->insert([
            'se' => 0,
            'username' => 'Emily Brown',
            'email' => 'user4@example.com',
            'password' => 'password4',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // ユーザー5
        DB::table('userinfos')->insert([
            'se' => 0,
            'username' => 'David Wilson',
            'email' => 'user5@example.com',
            'password' => 'password5',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
