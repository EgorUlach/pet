<?php

namespace App\Http\Controllers;

use App\Http\Resources\Role\RoleResource;
use App\Models\Role;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        return RoleResource::collection(Role::all())->resolve();
    }

    public function show(Role $role)
    {
        return RoleResource::make($role)->resolve();
    }

    public function store()
    {
        $data = [
          "name" => "test role",
        ];
        return RoleService::store($data);
    }

    public function update(Role $role)
    {
        $data = [
            "name" => "test update role",
        ];

        return RoleService::update($role, $data);
    }

    public function destroy(Role $role)
    {
        return RoleService::destroy($role);
    }
}
