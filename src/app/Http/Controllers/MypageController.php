<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MypageController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }

    public function profile_update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'postcode' => 'required|string',
            'address' => 'required|string',
            'building' => 'nullable|string',
            'avatar' => 'nullable|image',
        ]);

        if ($request->hasFile('avatar')) {
            $data['avatar'] = $request->file('avatar')->store('avatars', 'public');
        }

        $user = Auth::user();
        $user->update($data);

        return redirect()->route('user.mypage');
    }
}
