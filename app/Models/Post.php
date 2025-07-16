<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Post extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

//    public function comments()
//    {
//        return $this->hasMany(Comment::class);
//    }

    public function comments()
    {
        return $this->morphMany(Comment::class, "commentable");
    }

//    public function likes()
//    {
//        return $this->belongsToMany(Profile::class, 'post_profile_likes', 'post_id', 'profile_id');
//    }

    public function likedByProfile()
    {
        return $this->morphToMany(Profile::class, "likeable");
    }

    public function file()
    {
        return $this->morphOne(File::class, "fileable");
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }

    public function viewByProfile()
    {
        return $this->morphToMany(Profile::class, "viewable");
    }
}
