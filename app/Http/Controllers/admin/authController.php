<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function post(Request $request)
    {
        if (Auth::attempt($request->only('username', 'password'))) {
            return redirect('/admin/statistik');
        }
        return redirect('admin/login')->with('toast_error', 'Ups! Username atau password salah');
    }

    public function logout() {
        Auth::logout();
        return redirect('admin/login');
    }
}
