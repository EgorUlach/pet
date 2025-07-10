<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tag\StoreRequest;
use App\Http\Requests\Tag\UpdateRequest;
use App\Http\Resources\Tag\TagResource;
use App\Models\Tag;
use App\Services\TagService;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TagResource::collection(Tag::all())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return TagService::store($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Tag $tag)
    {
        return TagResource::make($tag)->resolve();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Tag $tag)
    {
        return TagService::update($tag, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tag $tag)
    {
        return TagService::destroy($tag);
    }
}
