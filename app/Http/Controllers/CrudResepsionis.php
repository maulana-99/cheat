<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CrudResepsionis extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('crud.resepsionis.index', ['users' => $users]);
    }

    public function create()
    {
        return view('crud.resepsionis.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users|regex:/^[a-zA-Z0-9._%+-]+@gmail\.com$/',
                'password' => 'required|string|min:8|confirmed',
            ],
            [
                'name.required' => 'Username wajib di isi',
                'email.required' => 'Email wajib di isi',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password wajib di isi',
                'password.min' => 'Password minimal 8 karakter',
                'password.confirmed' => 'Konfirmasi password tidak cocok',
            ]
        );

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->input('password')),
            'role' => 'resepsionis',
        ]);

        return redirect()->route('resepsionis.index')->with('success', 'Resepsionis berhasil ditambahkan');
    }

    public function edit($id)
    {
        $resepsionis = User::find($id);
        if (!$resepsionis) {
            abort(404);
        }
        return view('crud.resepsionis.update', ['resepsionis' => $resepsionis]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $user = User::find($request->user_id);
        $user->name = $request->name;
        $user->email = $request->email;

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('resepsionis.index')->with('success', 'Resepsionis berhasil diupdate');
    }
}
