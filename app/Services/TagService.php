<?php

namespace App\Services;

use App\Models\Tag;

class TagService
{
    public static function store(array $data)
    {
        return Tag::create($data);
    }

    public static function update(Tag $tag, array $data)
    {
       return $tag->update($data);
    }

    public static function destroy(Tag $tag)
    {
        return $tag->delete();
    }
}
