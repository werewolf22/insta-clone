<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller
{

    /**
     * Display the authenticated user's profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function showUserProfile(Request $request)
    {
        $user = $request->user()->load(['profile', 'posts' => function ($query) {
            $query->latest();
        }]);
        $authUser = $request->user()->load("following");
        [$postsCount, $followingCount, $followersCount] = $this->getUserStat($user);
        return view('profile.show', compact('user', 'authUser', 'postsCount', 'followingCount', 'followersCount'));
    }

    /**
     * Display the user's profile.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show($userId)
    {   
        $user = User::with(['profile', 'posts' => function ($query) {
            $query->latest();
        }])->findOrFail($userId);
        /** @var  App\Models\User $authUser */ 
        $authUser = auth()->user();
        $authUser?->load("following");
        [$postsCount, $followingCount, $followersCount] = $this->getUserStat($user);
        return view('profile.show', compact('user', 'authUser', 'postsCount', 'followingCount', 'followersCount'));
    }


    protected function getUserStat($user){
        $postsCount = Cache::remember('posts.count.'.$user->id, now()->addSeconds(30), function() use ($user){
            return $user->posts->count();
        });
        $followingCount = Cache::remember('following.count.'.$user->id, now()->addSeconds(30), function() use ($user){
            return $user->following->count();
        });
        $followersCount = Cache::remember('followers.count.'.$user->id, now()->addSeconds(30), function() use ($user){
            return $user->followers->count();
        });
        return [$postsCount, $followingCount, $followersCount];
    }

    /**
     * Display the user's profile form.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function edit(Request $request)
    {
        $user = $request->user()->load('profile');
        $this->authorize('update', $user->profile);
        return view('profile.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the user's profile information.
     *
     * @param  \App\Http\Requests\ProfileUpdateRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProfileUpdateRequest $request)
    {
        $imgArr = [];
        $user = $request->user();
        $profile = $user->profile()->getResults();
        if($request->file('image')){
            if($profile->image){
                // dd(storage_path('app/public/'.$profile->image));
                unlink(storage_path('app/public/'.$profile->image));
            }
            $imagePath = $request->file('image')->store('profile', 'public');
            // dd(storage_path('app/public/'.$imagePath));
            \Intervention\Image\Facades\Image::make(storage_path('app/public/'.$imagePath))->fit(120,120)->save();
            $imgArr = ['image'=> $imagePath];
        }
        $user->fill($request->validated());
        
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }
        
        $user->save();
        $profile->fill(array_merge($request->validated(), $imgArr));
        $profile->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
