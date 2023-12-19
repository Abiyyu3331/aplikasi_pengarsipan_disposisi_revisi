<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\Suratkeluar;
use App\Models\Suratmasuk;
use App\Models\Disposisi;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function register(Role $role)
    {
        $roles = Role::all();
        return view('auth.register')->with('roles', $roles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            'id'            => 'required',
            'nama_depan'    => 'required',
            'nama_belakang' => 'required',
            'email'         => 'required',
            'password'      => 'required',
            'role_id'       => 'required'
        ]);

        $user::create([
            'id'            => $request->id,
            'nama_depan'    => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'role_id'       => $request->role_id
        ]);

        // $credentials = $request->only('email', 'password');
        // Auth::attempt($credentials);
        // $request->session()->regenerate();
        return redirect()->route('user.index')->with('success');

    }

    public function login()
    {
        return view('auth.login');
    }

    // auth proses login
    public function auth(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'email atau password tidak ditemukan',
        ])->onlyInput('email');

    }

    // logout proses
    public function logout(Request $request, Auth $auth)
    {
        $auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login');
    }

    // dasboard page
    public function dashboard(Auth $auth, User $user)
    {
        $jumlah_user = User::count();
        $jumlah_disposisi = Disposisi::count();
        $jumlah_suratmasuk = Suratmasuk::count();
        $jumlah_suratkeluar = Suratkeluar::count();
        $jumlah_surat = $jumlah_suratmasuk + $jumlah_suratkeluar;
        return view('dashboard', compact('jumlah_user', 'jumlah_disposisi', 'jumlah_suratmasuk', 'jumlah_suratkeluar', 'jumlah_surat'));

        if ($auth::check())
        {
            return view('dashboard');
        }

        return redirect()->route('auth.login');
    }


}
