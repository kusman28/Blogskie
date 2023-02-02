<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory;
use App\Models\Post\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        $faker = Factory::create();

        $posts = 1;
        
        while ($posts <= 5) {
            DB::table('posts')->insert([
                'user_id' => 1,
                'title' => $faker->words(rand(2, 4), true),
                'body' => $faker->paragraphs(5, true),
                'slug' => $faker->word,
                'image' => 'https://picsum.photos/id/'.rand(1, 50).'/600/400',
                'published_at' => Carbon::now(),
                'views' => rand(1, 50),
            ]);
            $posts++;
        }
    }
}
