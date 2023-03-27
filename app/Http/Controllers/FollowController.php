<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    public function store(User $user)
    {
        /** @var \App\Models\User $authUser **/
        $authUser = Auth::user();
        return $authUser->following()->toggle($user->id);
    }
}
