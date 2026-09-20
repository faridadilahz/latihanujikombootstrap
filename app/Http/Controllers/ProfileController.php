<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('admin.profil', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        $previousUrl = url()->previous();
        return view('admin.editprofil', compact('user', 'previousUrl'));
    }

    public function update(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:5120',
        ]);

        if ($request->hasFile('avatar')) {
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }

            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $avatarPath;
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        $redirectTo = $request->input('redirect_to', route('admin.profil'));

        return redirect($redirectTo)->with('success', 'Profil berhasil diperbarui!');
    }

    public function kelolasandi()
    {
        $user = Auth::user();
        $previousUrl = url()->previous();

        return view('profil.kelolakatasandi', compact('user', 'previousUrl'));
    }

    public function ubahsandi()
    {
        $previousUrl = route('profil.kelolakatasandi');
        return view('profil.ubahkatasandi', compact('previousUrl'));
    }

    public function updatesandi(Request $request)
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $request->validate([
            'current_password' => ['required', 'string'],
            'password'         => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Kata sandi saat ini salah.']);
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('profil.kelolakatasandi')->with('success', 'Kata sandi berhasil diperbarui!');
    }
}