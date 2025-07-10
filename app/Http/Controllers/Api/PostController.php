<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResourse;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return PostResourse::collection(Post::all())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        return PostService::store($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return PostResourse::make($post)->resolve();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        return PostService::update($post, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        return PostService::destroy($post);
    }
}
