<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=>"Admin",
            "email"=>"Admin@gmail.com",
            "password"=>Hash::make("password"),
            "role_id"=>1,

        ]);
        User::create([
            "name"=>"manager",
            "email"=>"manager@gmail.com",
            "password"=>Hash::make("password"),
            "role_id"=>2,

        ]);
        User::create([
            "name"=>"user",
            "email"=>"user@gmail.com",
            "password"=>Hash::make("password"),
            "role_id"=>3,

        ]);
    }
}
