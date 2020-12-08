<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->paginate(5),
        ]);
    }

    public function edit(User $user)
    {
        abort_if (auth()->user()->isNot($user), '404'); //middleware kullanmak istemiyrosan yetkilendirme işini böyle yapabilirsin. bu sayede kimse başkasının edit sayfasına gidemez!

        return view('profiles.edit', compact('user'));
    }

    public function update(User $user)
    {
        abort_if (auth()->user()->isNot($user), '404');

        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', 'alpha_dash', Rule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255'],
            'email' => ['string', 'required', 'email', 'max:255', Rule::unique('users')->ignore($user)],
            'avatar' => ['file'],
            'password' => ['string', 'required', 'min:8', 'max:255', 'confirmed'],
        ]);

        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);

        return redirect()->route('profiles', $user);
    }
}
