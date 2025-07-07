<?php

namespace App\Http\Controllers;

use App\Http\Resources\Tag\TagResource;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return TagResource::collection(Tag::all())->resolve();
    }

    public function show(Tag $tag)
    {
        return TagResource::make($tag)->resolve();
    }

    public function store()
    {
        $data = [
            'name' => 'tag name',
        ];

        return TagService::store($data);
    }

    public function update(Tag $tag)
    {
        $data = [
            'name' => 'tag name update',
        ];

        return TagService::update($tag, $data);
    }

    public function destroy(Tag $tag)
    {
        return TagService::destroy($tag);
    }
}
