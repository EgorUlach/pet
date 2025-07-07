<?php

namespace App\Http\Controllers;

use App\Http\Resources\Post\PostResourse;
use App\Models\Post;
use App\Services\PostService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return PostResourse::collection(Post::all())->resolve();
    }

    public function show(Post $post)
    {
        return PostResourse::make($post)->resolve();
    }

    public function store()
    {
        $data = [
            'title' => 'test service',
        ];
        return PostService::store($data);
    }

    public function update(Post $post)
    {
        $data = [
          'title' => 'test service',
        ];

        return PostService::update($post, $data);
    }

    public function destroy(Post $post)
    {
        return PostService::destroy($post);
    }
}
