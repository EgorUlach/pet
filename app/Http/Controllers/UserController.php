<?php

namespace App\Http\Controllers;

use App\Http\Resources\User\UserResource;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return UserResource::collection(User::all())->resolve();
    }

    public function show(User $user)
    {
        return UserResource::make($user)->resolve();
    }

    public function store()
    {
        $data = [
            'name' => 'name',
        ];
        return UserService::store($data);
    }

    public function update(User $user)
    {
        $data = [
            'name' => 'update name',
        ];
        return UserService::update($user, $data);
    }

    public function destroy(User $user)
    {
        return UserService::destroy($user);
    }
}
