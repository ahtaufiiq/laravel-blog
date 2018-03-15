<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset table post
        DB::table('posts')->truncate();

        //insert 10 dummy data to posts
        $posts = [];
        $faker = Factory::create();

        for ($i=0; $i < 10; $i++) {
            $date = date('Y-m-d H:i:s', strtotime("2018-03-08 11:43:00 +{$i} days"));
            $posts[] = [
                'user_id' => rand(1, 3),
                'title' => $faker->sentence(rand(10, 12), true),
                'body' => $faker->paragraphs(rand(10 ,12), true),
                'created_at' => $date,
                'updated_at' => $date
            ];
        }

        DB::table('posts')->insert($posts);
    }
}