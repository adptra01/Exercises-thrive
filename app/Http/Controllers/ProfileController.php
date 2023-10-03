<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $auth = Auth()->user();
        return view('profile.index', [
            'auth' => $auth
        ]);
    }

    public function update(Request $request)
    {
        $auth = Auth()->user();
        $messages = [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah terdaftar'
        ];

        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $auth->id,
        ], $messages);


        $auth->update($validateData);
        return back()->with('success', 'Berhasil Bro!');
    }

    public function password(Request $request)
    {
        $auth = Auth()->user();

        $messages = [
            'password.required' => 'Password harus diisi',
            'password.string' => 'Password harus berupa string',
            'password.min' => 'Password minimal 8 karakter',
            'password.confirmed' => 'Password harus sama dengan konfirmasi password'
        ];

        $validateData = $request->validate([
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], $messages);

        $auth->update([
            'password' => bcrypt($request->password)
        ]);
        return back()->with('success', 'Berhasil Bro!');
    }
}
