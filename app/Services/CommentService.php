<?php

namespace App\Services;

use App\Models\Comment;

class CommentService
{
    public static function store(array $data)
    {
        return Comment::create($data);
    }

    public static function update(array $data, Comment $comment)
    {
        return $comment->update($data);
    }

    public static function destroy(Comment $comment)
    {
        return $comment->delete();
    }
}
