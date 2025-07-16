<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Profile;
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
        $posts = Post::factory()->count(10)->create();

        $tags = Tag::all();
        foreach ($posts as $post) {
            $post->tags()->syncWithoutDetaching($tags->random()->take(fake()->numberBetween(1, 10))->pluck('id'));
        }
    }
}
