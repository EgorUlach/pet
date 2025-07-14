<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
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
}
