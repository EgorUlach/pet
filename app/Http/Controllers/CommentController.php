<?php

namespace App\Http\Controllers;

use App\Http\Resources\Comment\CommentResource;
use App\Models\Comment;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return CommentResource::collection(Comment::all())->resolve();
    }

    public function show(Comment $comment)
    {
        return CommentResource::make($comment)->resolve();
    }

    public function store()
    {
        $data = [
            'content' => 'test content'
        ];
        return CommentService::store($data);
    }

    public function update(Comment $comment)
    {
        $data = [
            'content' => 'test content 1'
        ];
        return CommentService::update($data, $comment);
    }

    public function destroy(Comment $comment)
    {
        return CommentService::destroy($comment);
    }
}
