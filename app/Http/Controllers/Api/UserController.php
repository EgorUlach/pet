<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use App\Services\UserService;
use HttpResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserResource::collection(User::all())->resolve();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return UserService::store($request->validated());
    }
    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response(UserResource::make($user)->resolve());
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, User $user)
    {
        return UserService::update($user, $request->validated());
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        return UserService::destroy($user);
    }
}
