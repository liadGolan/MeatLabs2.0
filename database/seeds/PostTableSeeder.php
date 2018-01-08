<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'a post',
            'content' => 'wow look at this post',
            'author' => 'Some Dude'
        ]);
    }
}
