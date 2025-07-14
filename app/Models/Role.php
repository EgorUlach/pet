<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function profile()
    {
        return $this->hasOneThrough(Profile::class, User::class);
    }

    public function profiles()
    {
        return $this->hasManyThrough(Profile::class, User::class);
    }
}
