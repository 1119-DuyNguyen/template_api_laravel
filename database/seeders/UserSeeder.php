<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seedData = [
            [
                'name' => 'Người dùng tối cao',
                'email' => 'admin@gmail.com',
                'role_id' => 1,
                'password' => bcrypt('123'),
                'status' => 1
            ],
            [
                'name' => 'Tài khoản bị khoá',
                'email' => 'ban@gmail.com',
                'role_id' => 2,
                'password' => bcrypt('123'),
                'status' => 0
            ],
            [
                'name' => 'Người dùng',
                // 'username' => 'user',
                'email' => 'user@gmail.com',
                'role_id' => 2,
                'password' => bcrypt('123'),
                'status' => 1
            ]
        ];
        foreach ($seedData as $data) {
            User::create($data);
        }
    }
}
