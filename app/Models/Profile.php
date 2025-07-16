<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function postLikes()
    {
        return $this->belongsToMany(Post::class, 'post_profile_likes', 'profile_id', 'post_id');
    }

    public function role()
    {
        return $this->user->role();
    }

    public function likedPosts()
    {
        return $this->morphedByMany(Post::class, 'likeable');
    }

    public function likedComments()
    {
        return $this->morphedByMany(Comment::class, 'likeable');
    }

    public function viewedPosts()
    {
        return $this->morphedByMany(Post::class, 'viewable');
    }

    public function viewedComments()
    {
        return $this->morphedByMany(Comment::class, 'viewable');
    }
}
