<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function address($item_id)
    {
        $address = Auth::user()->address;
        return view('user.address', compact('address', 'item_id'));
    }

    public function updateaddress(Request $request, $item_id)
    {
        $data = $request->validate([
            'postal_code' => 'required',
            'prefecture' => 'required',
            'city' => 'required',
            'address_line1' => 'required',
            'address_line2' => 'nullable',
        ]);

        $user = Auth::user();
        $user->address()->updateOrCreate(['user_id' => $user->id], $data);

        return redirect()->route('items.purchase', $item_id);
    }
}
