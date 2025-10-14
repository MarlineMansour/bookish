<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Marline',
            'email' => 'marline@example.com',
            'password' => '123456', // password
            'gender' =>'0',
            'phone'=>'01258963476',
        ]);

    }
}
