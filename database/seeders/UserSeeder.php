<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Marline',
            'email' => 'marline@example.com',
            'password' => password_hash('123456'), // password
            'gender' =>'0',
            'phone'=>'01258963476',
        ]);
    }
}
