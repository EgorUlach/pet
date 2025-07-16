<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function file()
    {
        return $this->morphOne(File::class, "fileable");
    }

    public function commentable()
    {
        return $this->morphTo();
    }
    public function category()
    {
        return $this->post->category();
    }

    public function viewByProfile()
    {
        return $this->morphToMany(Profile::class, "viewable");
    }

    public function likeByProfile()
    {
        return $this->MorphToMany(Profile::class, "likeable");
    }
}
