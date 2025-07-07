<?php

namespace App\Services;

use App\Models\Post;

class PostService
{
   public static function store(array $data): Post
   {
        return Post::create($data);
   }

   public static function update(Post $post, array $data) : bool
   {
       return $post->update($data);
   }

    public static function destroy(Post $post) : ?bool
    {
        return $post->delete();
    }
}
