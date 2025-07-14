<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 */
class Post extends Model
{
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

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function likes()
    {
        return $this->belongsToMany(Profile::class, 'post_profile_likes', 'post_id', 'profile_id');
    }
}
