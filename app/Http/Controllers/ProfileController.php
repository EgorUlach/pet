<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Http\Resources\Profile\ProfileResource;
use App\Models\Profile;
use App\Services\ProfileService;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    public function index()
    {
        return ProfileResource::collection(Profile::all())->resolve();
    }
    public function show(Profile $profile)
    {
        return ProfileResource::make($profile)->resolve();
    }
    public function store()
    {
        $data = [
          "name" => "new name",
        ];

        return ProfileService::store($data);
    }
    public function update(Profile $profile)
    {
        $data = [
            "name" => "new name",
        ];

        return ProfileService::update($profile, $data);
    }
    public function destroy(Profile $profile)
    {
        return ProfileService::destroy($profile);
    }
//    public function edit(Request $request): Response
//    {
//        return Inertia::render('Profile/Edit', [
//            'mustVerifyEmail' => $request->user() instanceof MustVerifyEmail,
//            'status' => session('status'),
//        ]);
//    }
//
//    /**
//     * Update the user's profile information.
//     */
//    public function update(ProfileUpdateRequest $request): RedirectResponse
//    {
//        $request->user()->fill($request->validated());
//
//        if ($request->user()->isDirty('email')) {
//            $request->user()->email_verified_at = null;
//        }
//
//        $request->user()->save();
//
//        return Redirect::route('profile.edit');
//    }
//
//    /**
//     * Delete the user's account.
//     */
//    public function destroy(Request $request): RedirectResponse
//    {
//        $request->validate([
//            'password' => ['required', 'current_password'],
//        ]);
//
//        $user = $request->user();
//
//        Auth::logout();
//
//        $user->delete();
//
//        $request->session()->invalidate();
//        $request->session()->regenerateToken();
//
//        return Redirect::to('/');
//    }
}
