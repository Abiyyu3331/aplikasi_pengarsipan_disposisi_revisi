<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function destroy(User $user, $id)
    {
        $user = User::findOrFail($id); // Mengambil data user berdasarkan ID

        $user->delete(); // Menghapus user

        return redirect()->route('user.index');
    }
}
