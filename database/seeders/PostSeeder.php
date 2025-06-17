<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {    

            $faker = Faker::create();
            for($i = 1; $i <= 50; $i++){
                    DB::table('posts')->insert([
                        /*
                    'title' => Str::random(20),
                    'description'=> Str::random(200),*/
                    'title'=>$faker->sentence(6),
                    'description'=>$faker->paragraph(4),
                    'status' => 1,
                    'publish_date' => date('Y-m-d'),
                    'user_id' => 1,
                    'category_id'=>rand(1,4),
                    'views'=>rand(0,2000)     
                    ]);
            }
    }
}
