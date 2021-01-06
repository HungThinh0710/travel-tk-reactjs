<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 40; $i++)
        {
            DB::table('news')->insert([
                'category_id' => mt_rand(1, 5),
                'title' => Str::random(10),
                'content' => Str::random(100),
                'author_id' => mt_rand(1,10),
                'tags' => Str::random(4),
//                'phone' => '',
            ]);
        }
    }
}

