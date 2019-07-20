<?php

use Illuminate\Database\Seeder;
//per includere i faker all'interno del seed
use Faker\Factory as Faker;
//includo la classe Post 
use App\Post;
use Illuminate\Support\Str;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=0; $i < 20 ; $i++) {
          $new_post = new Post();
          $new_post->title = $faker->sentence();
          $new_post->content = $faker->text(2000);
          $new_post->author = $faker->firstName . ' ' . $faker->lastName;
          $new_post->slug = Str::slug($new_post->title);
          $new_post->save();
        }
    }
}
