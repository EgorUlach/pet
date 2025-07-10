<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Http\Requests\Category\UpdateRequest;
use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;
use App\Services\CategoryServices;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CategoryResource::collection(Category::all())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
       $data = $request->validated();

       return CategoryServices::store($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return CategoryResource::make($category)->resolve();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();

        return CategoryServices::update($category, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        return CategoryServices::destroy($category);
    }
}
