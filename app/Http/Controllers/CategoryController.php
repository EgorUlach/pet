<?php

namespace App\Http\Controllers;

use App\Http\Resources\Category\CategoryResource;
use App\Models\Category;
use App\Services\CategoryServices;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return CategoryResource::collection(Category::all())->resolve();
    }

    public function show(Category $category)
    {
        return CategoryResource::make($category)->resolve();
    }

    public function store()
    {
        $data = [
            "name" => "123_1234",
        ];
        return CategoryServices::store($data);
    }

    public function update(Category $category)
    {
        $data = [
            "name" => "456_789",
        ];
        return CategoryServices::update($category, $data);
    }

    public function destroy(Category $category)
    {
        return CategoryServices::destroy($category);
    }
    
}
