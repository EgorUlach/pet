<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreRequest;
use App\Http\Requests\Comment\UpdateRequest;
use App\Http\Resources\Comment\CommentResource;
use App\Models\Comment;
use App\Services\CategoryServices;
use App\Services\CommentService;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CommentResource::collection(Comment::all())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        return CommentService::store($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        return CommentResource::make($comment)->resolve();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Comment $comment)
    {
        $data = $request->validated();
        return CommentService::update($data, $comment);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        return CommentService::destroy($comment);
    }
}
