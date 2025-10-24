<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = auth('cms')->user();

        return view('back.profile.edit', compact('user'));
    }

    public function update(ProfileRequest $request)
    {
        $validated = $request->validated();

        $user = auth('cms')->user();

        $user->update($validated);

        flash('Profile Updated')->success();

        return redirect()->route('back.profile.edit');
    }
}
