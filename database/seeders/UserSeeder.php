<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Shamim Sumon',
                'email' => 'ss@gmail.com',
                'phone' => '01775168357',
                'password' =>bcrypt(123456),
                'role' => 'librarian',
                'is_banned' => 0
            ],
            [
                'name' => 'Nur Hossain',
                'email' => 'nr@gmail.com',
                'phone' => '01683652563',
                'password' =>bcrypt(123456),
                'role' => 'user',
                'is_banned' => 0
            ]

        ];
        DB::table('users')->insert($users);
    }
}
