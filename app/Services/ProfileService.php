<?php

namespace App\Services;

use App\Models\Profile;

class ProfileService
{
    public static function store($data)
    {
        return Profile::create($data);
    }

    public static function update(Profile $profile, $data)
    {
        return $profile->update($data);
    }

    public static function destroy(Profile $profile)
    {
        return $profile->delete();
    }
}
