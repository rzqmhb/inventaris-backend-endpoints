<?php

namespace Database\Seeders;

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
        $users = [
            [
                "name"=> "user 1",
                "email"=> "user1@domain.com",
                "password"=> bcrypt("user1oweo"),
            ],
            [
                "name"=> "user 2",
                "email"=> "user2@domain.com",
                "password"=> bcrypt("user2oweo"),
            ],
            [
                "name"=> "user 3",
                "email"=> "user3@domain.com",
                "password"=> bcrypt("user3oweo"),
            ],
        ];

        foreach ($users as $user) {
            DB::table("users")->insert($user);
        }
    }
}
