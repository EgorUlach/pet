<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public static function store($data)
    {
        return User::create($data);
    }

    public static function update(User $user, $data)
    {
        return $user->update($data);
    }

    public static function destroy(User $user)
    {
        return $user->delete();
    }
}
