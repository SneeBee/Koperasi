<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // Tampilkan halaman login
    public function showLogin()
    {
        return view('loginpage');
    }

    // Proses login
    public function login(Request $request)
    {
        $user = UserModel::where('username', $request->username)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            // Simpan data user di session
            session(['user' => $user]);

            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Username atau password salah');
    }

    // Tampilkan halaman register
    public function showRegister()
    {
        return view('registerpage');
    }

    // Proses register
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:user,username',
            'password' => 'required|min:6',
        ]);

        UserModel::create([
            'username' => $request->username,
            'password' => Hash::make($request->password), // simpan hash
            'role'     => 'penumpang', // default otomatis
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login');
    }

    // Halaman dashboard
    public function dashboard()
    {
        $user = session('user');
        if (!$user) {
            return redirect()->route('login')->with('error', 'Silakan login dulu');
        }

        return view('dashboard', compact('user'));
    }

    // Logout
    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login');
    }
}
