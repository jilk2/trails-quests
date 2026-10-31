<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::all();
        $posts = Post::factory(10)->manual()->create();

        foreach ($posts as $post) {
            $post->tags()->attach(
                $tags->random(random_int(1, $tags->count()))
            );
        }

    }
}
