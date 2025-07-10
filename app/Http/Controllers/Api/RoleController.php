<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\StoreRequest;
use App\Http\Requests\Role\UpdateRequest;
use App\Http\Resources\Role\RoleResource;
use App\Models\Role;
use App\Services\RoleService;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return RoleResource::collection(Role::all())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return RoleService::store($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return RoleResource::make($role)->resolve();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Role $role)
    {
        return RoleService::update($role, $request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        return RoleService::destroy($role);
    }
}
