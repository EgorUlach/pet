<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\StoreRequest;
use App\Http\Requests\Profile\UpdateRequest;
use App\Http\Resources\Profile\ProfileResource;
use App\Models\Profile;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProfileResource::collection(Profile::all())->resolve();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        return ProfileService::store($data);
    }

    /**
     * Display the specified resource.
     */
    public function show(Profile $profile)
    {
        return ProfileResource::make($profile)->resolve();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Profile $profile)
    {
        $data = $request->validated();
        return ProfileService::update($profile, $data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Profile $profile)
    {
        return ProfileService::destroy($profile);
    }
}
