<?php

namespace App\Services;

use App\Models\Comment;

class CommentService
{
    public static function store(array $data) : bool
    {
        return Comment::create($data);
    }

    public static function update(array $data, Comment $comment) : bool
    {
        return $comment->update($data);
    }

    public static function destroy(Comment $comment) : bool
    {
        return $comment->delete();
    }
}
