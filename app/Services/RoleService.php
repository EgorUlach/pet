<?php

namespace App\Services;

use App\Models\Role;

class RoleService
{
    public static function store($data)
    {
        return Role::create($data);
    }

    public static function update(Role $role, $data)
    {
        return $role->update($data);
    }

    public static function destroy(Role $role)
    {
        return $role->delete();
    }
}
