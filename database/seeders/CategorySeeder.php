<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' =>'mystery',
            'code'=> 'M',
            'image'=>'mystery.png',


        ],[
                'name' =>'history',
                'code'=> 'H',
                'image'=>'history.jpg',
            ],
            [
                'name' =>'science fiction',
                'code'=> 'S',
                'image'=>'scienceFiction.webp',
            ],[
                'name' =>'cooking',
                'code'=> 'C',
                'image'=>'cookingbooks.jpg',
            ]
        );
    }
}
