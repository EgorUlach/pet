<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Post;

class CategoryServices
{
    public static function store($data)
    {
        return Category::create($data);
    }

    public static function update(Category $category, $data)
    {
        return $category->update($data);
    }

    public static function destroy(Category $category)
    {
        return $category->delete();
    }
}
